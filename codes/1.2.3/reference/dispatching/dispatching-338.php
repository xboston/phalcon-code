<?php

use Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager;

$di->set('dispatcher', function() {

    //Create an EventsManager
    $eventsManager = new EventsManager();

    //Remove extension before dispatch
    $eventsManager->attach("dispatch:beforeDispatchLoop", function($event, $dispatcher) {

        //Remove extension
        $action = preg_replace('/\.php$/', '', $dispatcher->getActionName());

        //Override action
        $dispatcher->setActionName($action);
    });

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

