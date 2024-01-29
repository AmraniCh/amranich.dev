<?php

use TightenCo\Jigsaw\Jigsaw;

/** var \Illuminate\Container\Container $container */
/** var \TightenCo\Jigsaw\Events\EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */


$events->beforeBuild(function (Jigsaw $jigsaw) {

    try {
        $url = "https://api.github.com/repos/amranich/amranich.dev/tags";
        $options = [
            'http' => [
                'method' => "GET",
                'header' => "Accept: application/json\r\n" .
                    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\r\n"
            ]
        ];
        $context = stream_context_create($options);
        $json = file_get_contents($url, false, $context);
        $tags = json_decode($json, true);

        $jigsaw->setConfig('version', is_array($tags) && count($tags) > 0 ? $tags[0]['name'] : '');
    } catch (\Throwable $ex) {
        echo "Error: " . $ex->getMessage();
        error_log("Caught $ex");
    }
});
