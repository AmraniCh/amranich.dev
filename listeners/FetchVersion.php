<?php

namespace App\Listeners;

use GuzzleHttp\Client;
use TightenCo\Jigsaw\Jigsaw;
use GuzzleHttp\Exception\ClientException;

class FetchVersion
{
    public function handle(Jigsaw $jigsaw)
    {
        try {
            $client = new Client();
            $response = $client->get("https://api.github.com/repos/amranich/amranich.dev/tags");
            $tags = json_decode($response->getBody(), true);
            $jigsaw->setConfig('version', $tags[0]["name"]);
        } catch (ClientException $ex) {
            if ($ex->getCode() !== 403) {
                throw $ex;
            }

            echo "Unable to fetch last website version from GitHub API: {$ex->getMessage()}";
        }
    }
}
