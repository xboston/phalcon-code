<?php

//Registering Volt as template engine
$di->set('view', function() {

    $view = new \Phalcon\Mvc\View();

    $view->setViewsDir('../app/views/');

    $view->registerEngines(array(
        ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
    ));

    return $view;
});

