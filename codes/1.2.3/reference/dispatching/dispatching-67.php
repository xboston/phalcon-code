<?php

use Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager;

$di->set('dispatcher', function(){

    //Create an event manager
    $eventsManager = new EventsManager();

    //Attach a listener for type "dispatch"
    $eventsManager->attach("dispatch", function($event, $dispatcher) {
        //...
    });

    $dispatcher = new MvcDispatcher();

    //Bind the eventsManager to the view component
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);

