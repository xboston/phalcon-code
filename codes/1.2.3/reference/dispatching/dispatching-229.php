<?php

use Phalcon\Dispatcher,
    Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager;

$di->set('dispatcher', function() {

    //Create an EventsManager
    $eventsManager = new EventsManager();

    //Attach a listener
    $eventsManager->attach("dispatch:beforeDispatchLoop", function($event, $dispatcher) {

        $keyParams = array();
        $params = $dispatcher->getParams();

        //Explode each parameter as key,value pairs
        foreach ($params as $number => $value) {
            $parts = explode(':', $value)
            $keyParams[$parts[0]] = $parts[1];
        }

        //Override parameters
        $dispatcher->setParams($keyParams);
    });

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

