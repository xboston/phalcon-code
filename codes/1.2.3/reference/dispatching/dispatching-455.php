<?php

use Phalcon\Dispatcher,
    Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager,
    Phalcon\Mvc\Dispatcher\Exception as DispatchException;

$di->set('dispatcher', function() {

    //Create an EventsManager
    $eventsManager = new EventsManager();

    //Attach a listener
    $eventsManager->attach("dispatch:beforeException", function($event, $dispatcher, $exception) {

        //Handle 404 exceptions
        if ($exception instanceof DispatchException) {
            $dispatcher->forward(array(
                'controller' => 'index',
                'action' => 'show404'
            ));
            return false;
        }

        //Handle other exceptions
        $dispatcher->forward(array(
            'controller' => 'index',
            'action' => 'show503'
        ));

        return false;
    });

    $dispatcher = new MvcDispatcher();

    //Bind the EventsManager to the dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);

