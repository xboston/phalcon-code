<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
        '../apps/controllers/',
        '../apps/models/'
    )
)->register();

$di = new \Phalcon\DI\FactoryDefault();

// Регистрация компонента представлений
$di->set('view', function() {
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir('../apps/views/');
    return $view;
});

try {
    $application = new \Phalcon\Mvc\Application();
    $application->setDI($di);
    echo $application->handle()->getContent();
} catch(Phalcon\Exception $e) {
    echo $e->getMessage();
}

