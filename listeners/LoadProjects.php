<?php

namespace App\Listeners;

use App\Models\Project;
use GuzzleHttp\Client;
use TightenCo\Jigsaw\Jigsaw;
use GuzzleHttp\Exception\ClientException;

class LoadProjects
{
    private const FILENAME = 'projects.json';

    public function handle(Jigsaw $jigsaw)
    {
        $jsonFile = dirname(__DIR__) . '/' . self::FILENAME;

        if (!file_exists($jsonFile)) {
            throw new \RuntimeException(sprintf("'%s' file not found in root directory.", self::FILENAME));
        }

        if (($content = file_get_contents($jsonFile)) === false) {
            throw new \RuntimeException(sprintf("Can't read projects file '%s' content.", $jsonFile));
        }

        if (($projects = json_decode($content, true)) === NULL) {
            throw new \RuntimeException(sprintf("Unable to decode projects file '%s' JSON content.", $jsonFile));
        }

        $projectsCollection = collect();

        foreach ($projects as $project) {
            $projectsCollection->push(
                new Project(
                    releaseDate: $project['release_date'],
                    name: $project['name'],
                    madeAt: $project['made_at'],
                    stack: collect($project['stack']),
                    links: collect($project['links'])
                )
            );
        }

        // sort projects by release date from older to newest
        $projectsArray = $projectsCollection->toArray();
        usort($projectsArray, fn (Project $a, Project $b) =>  strtotime($a->getReleaseDate()) - strtotime($b->getReleaseDate()));

        $jigsaw->setConfig('projects', collect($projectsArray));
    }
}
