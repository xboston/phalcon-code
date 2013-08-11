<?php

$eventsManager = new \Phalcon\Events\Manager();

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
   'Example\\Base' => 'vendor/example/base/',
   'Example\\Adapter' => 'vendor/example/adapter/',
   'Example' => 'vendor/example/'
));

//Listen all the loader events
$eventsManager->attach('loader', function($event, $loader) {
    if ($event->getType() == 'beforeCheckPath') {
        echo $loader->getCheckedPath();
    }
});

$loader->setEventsManager($eventsManager);

$loader->register();

