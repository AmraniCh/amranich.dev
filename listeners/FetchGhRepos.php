<?php

namespace App\Listeners;

use GuzzleHttp\Client;
use App\Models\Repository;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Collection;
use TightenCo\Jigsaw\Jigsaw;

class FetchGhRepos
{
    private Client $client;

    private const PINNED_REPOS = [
        "lazzard/php-ftp-client",
        "amranich/github-code-font-changer",
        "amranich/ftp-filemanager",
        "amranich/vanilla-filemanager",
        "amranich/ajax-router",
        "amranich/how-jQuery-works",
    ];

    public function __construct()
    {
        $this->client = new Client();
    }


    public function handle(Jigsaw $jigsaw)
    {
        $jigsaw->setConfig('githubRepos', collect());

        foreach (self::PINNED_REPOS as $repo) {
            try {
                $ghRepoData = $this->getGithubRepo($repo);
                $ghRepoLangs = $this->getGithubRepoLanguages($repo);
                $packagistData = $this->getPackagistRepo($repo);

                /** @var Collection */
                $repos = $jigsaw->getConfig('githubRepos');

                $jigsaw->setConfig('githubRepos', $repos->push(new Repository(
                    fullName: $ghRepoData['full_name'],
                    htmlUrl: $ghRepoData['html_url'],
                    description: $ghRepoData['description'],
                    stargazersCount: $ghRepoData['stargazers_count'],
                    forksCount: $ghRepoData['forks_count'],
                    languages: collect(array_keys($ghRepoLangs)),
                    packagistUrl: !empty($packagistData) ? "https://packagist.org/packages/$repo" : '',
                    packagistDownloadsCount: !empty($packagistData) ? $packagistData['downloads']['total'] : 0
                )));
            } catch (ClientException $ex) {
                if ($ex->getCode() !== 403) {
                    throw $ex;
                }

                echo "Unable to fetch repository '$repo' information from GitHub API: {$ex->getMessage()}";
            }
        }
    }

    private function getGithubRepo(string $repo): array
    {
        $response = $this->client->get("https://api.github.com/repos/$repo");

        return json_decode((string)$response->getBody(), true);
    }

    private function getGithubRepoLanguages(string $repo): array
    {
        $response = $this->client->get("https://api.github.com/repos/$repo/languages");

        return json_decode((string)$response->getBody(), true);
    }

    /**
     * @return array Returns empty array if the repository is not found
     */
    private function getPackagistRepo(string $repo): array
    {
        try {
            $response = $this->client->get("https://packagist.org/packages/$repo/stats.json");

            return json_decode((string)$response->getBody(), true);
        } catch (ClientException $ex) {
            if ($ex->getResponse()->getStatusCode() === 404) {
                return [];
            }
        }
    }
}
