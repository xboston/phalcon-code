<?php

//Register Volt as template engine with an anonymous function
$di->set(
    'view' ,
    function () {

        $view = new \Phalcon\Mvc\View();

        $view->setViewsDir('../app/views/');

        $view->registerEngines(
            array(
                 ".volt" => function ($view , $di) {
                     $volt = new \Phalcon\Mvc\View\Engine\Volt($view , $di);

                     //set some options here

                     return $volt;
                 }
            )
        );

        return $view;
    }
);


