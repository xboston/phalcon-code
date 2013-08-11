<?php

use Phalcon\Text,
    Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager;

$di->set('dispatcher', function() {

    //Create an EventsManager
    $eventsManager = new EventsManager();

    //Camelize actions
    $eventsManager->attach("dispatch:beforeDispatchLoop", function($event, $dispatcher) {
        $dispatcher->setActionName(Text::camelize($dispatcher->getActionName()));
    });

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

