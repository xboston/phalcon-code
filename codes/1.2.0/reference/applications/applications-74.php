<?php

use Phalcon\Loader , Phalcon\Mvc\View , Phalcon\DI\FactoryDefault , Phalcon\Mvc\Dispatcher , Phalcon\Mvc\Application , Phalcon\Exception;

$loader = new Loader();

// Use autoloading with namespaces prefixes
$loader->registerNamespaces(
    array(
         'Single\Controllers' => '../apps/controllers/' ,
         'Single\Models'      => '../apps/models/' ,
    )
)->register();

$di = new FactoryDefault();

// Register the dispatcher setting a Namespace for controllers
$di->set(
    'dispatcher' ,
    function () {
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace('Single\Controllers');

        return $dispatcher;
    }
);

// Registering the view component
$di->set(
    'view' ,
    function () {
        $view = new View();
        $view->setViewsDir('../apps/views/');

        return $view;
    }
);

try {

    $application = new Application($di);

    echo $application->handle()->getContent();

} catch ( Exception $e ) {
    echo $e->getMessage();
}


