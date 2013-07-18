<?php

$di->set(
    'view' ,
    function () {

        //Create an events manager
        $eventsManager = new Phalcon\Events\Manager();

        //Attach a listener for type "view"
        $eventsManager->attach(
            "view" ,
            function ($event , $view) {
                echo $event->getType() , ' - ' , $view->getActiveRenderPath() , PHP_EOL;
            }
        );

        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir("../app/views/");

        //Bind the eventsManager to the view component
        $view->setEventsManager($eventsManager);

        return $view;

    } ,
    true
);

