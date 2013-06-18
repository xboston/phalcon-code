<?php

$di['dispatcher'] = function() {

    $eventsManager = new \Phalcon\Events\Manager();

    //Attach the plugin to 'dispatch' events
    $eventsManager->attach('dispatch', new CacheEnablerPlugin());

    $dispatcher = new \Phalcon\Mvc\Dispatcher();
    $dispatcher->setEventsManager($eventsManager);
    return $dispatcher;
};

