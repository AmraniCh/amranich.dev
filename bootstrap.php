<?php

use App\Listeners\FetchGhRepos;
use App\Listeners\FetchVersion;

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


$events->beforeBuild([FetchVersion::class, FetchGhRepos::class]);
