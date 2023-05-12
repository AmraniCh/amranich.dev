<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
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
    $maintenanceConfig = $jigsaw->getConfig('maintenance');

    if ($maintenanceConfig['enabled']) {
        // replace the siteName and siteDescription values in the config with 
        // the alternative maintenance siteName and an (optional) siteDescription
        $jigsaw->setConfig('siteName', $maintenanceConfig['siteName']);
        $jigsaw->setConfig(
            'siteDescription', 
            $maintenanceConfig['siteDescription'] ?? $jigsaw->getConfig('siteDescription')
        );
    }
});

$events->afterBuild(function (Jigsaw $jigsaw) {
    $maintenanceConfig = $jigsaw->getConfig('maintenance');
    
    if ($maintenanceConfig['enabled']) {
        $maintenancePageContent = $jigsaw->readOutputFile('app-down/index.html');
        $jigsaw->writeOutputFile('index.html', $maintenancePageContent);
    }

    unlink($jigsaw->getDestinationPath() . '/' . 'app-down/index.html');
    rmdir($jigsaw->getDestinationPath() . '/' . 'app-down');
});