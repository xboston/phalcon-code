<?php

$di->set('dispatcher', function(){

    //Create an event manager
    $eventsManager = new Phalcon\Events\Manager();

    //Attach a listener for type "dispatch"
    $eventsManager->attach("dispatch", function($event, $dispatcher) {
        //...
    });

    $dispatcher = new \Phalcon\Mvc\Dispatcher();

    //Bind the eventsManager to the view component
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);

