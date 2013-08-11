<?php

use Phalcon\Mvc\View,
    Phalcon\Mvc\View\Engine\Volt;

//Register Volt as a service
$di->set('voltService', function($view, $di) {

    $volt = new Volt($view, $di);

    $volt->setOptions(array(
        "compiledPath" => "../app/compiled-templates/",
        "compiledExtension" => ".compiled"
    ));

    return $volt;
});

//Register Volt as template engine
$di->set('view', function() {

    $view = new View();

    $view->setViewsDir('../app/views/');

    $view->registerEngines(array(
        ".volt" => 'voltService'
    ));

    return $view;
});

