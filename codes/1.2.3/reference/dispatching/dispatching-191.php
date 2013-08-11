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

        //Use odd parameters as keys and even as values
        foreach ($params as $number => $value) {
            if ($number & 1) {
                $keyParams[$params[$number - 1]] = $value;
            }
        }

        //Override parameters
        $dispatcher->setParams($keyParams);
    });

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

