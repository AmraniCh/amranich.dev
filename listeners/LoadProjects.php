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
        $projectsCollection = collect();
        $projects = $this->tryDecodeProjectsJsonFile(dirname(__DIR__) . '/' . self::FILENAME);

        foreach ($projects as $project) {
            $projectsCollection->push(
                new Project(
                    date: $project['date'],
                    name: $project['name'],
                    madeAt: $project['made_at'],
                    stack: collect($project['stack']),
                    links: collect($project['links']),
                )
            );
        }

        $projectsArray = $projectsCollection->toArray();

        // sort projects by release date from older to newest
        usort($projectsArray, fn (Project $a, Project $b) =>  strtotime($a->getDate()['end']) - strtotime($b->getDate()['end']));

        $jigsaw->setConfig('projects', collect($projectsArray));
    }

    /**
     * @throws \RuntimeException
     */
    private function tryDecodeProjectsJsonFile(string $file): array
    {
        if (!file_exists($file)) {
            throw new \RuntimeException(sprintf("'%s' file not found in root directory.", self::FILENAME));
        }

        if (($content = file_get_contents($file)) === false) {
            throw new \RuntimeException(sprintf("Can't read projects file '%s' content.", $file));
        }

        if (($projects = json_decode($content, true)) === NULL) {
            throw new \RuntimeException(sprintf("Unable to decode projects file '%s' JSON content.", $file));
        }

        return $projects;
    }
}
