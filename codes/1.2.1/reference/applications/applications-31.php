<?php

use Phalcon\Loader,
    Phalcon\DI\FactoryDefault,
    Phalcon\Mvc\Application,
    Phalcon\Exception,
    Phalcon\Mvc\View;

$loader = new Loader();

$loader->registerDirs(
    array(
        '../apps/controllers/',
        '../apps/models/'
    )
)->register();

$di = new FactoryDefault();

// Registering the view component
$di->set('view', function() {
    $view = new View();
    $view->setViewsDir('../apps/views/');
    return $view;
});

try {

    $application = new Application();
    $application->setDI($di);
    // OR
    $application = new Application($di);

    echo $application->handle()->getContent();

} catch (Exception $e) {
    echo $e->getMessage();
}

