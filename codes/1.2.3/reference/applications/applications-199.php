<?php

use Phalcon\Mvc\Router,
    Phalcon\Mvc\Application,
    Phalcon\DI\FactoryDefault;

$di = new FactoryDefault();

//Specify routes for modules
$di->set('router', function () {

    $router = new Router();

    $router->setDefaultModule("frontend");

    $router->add("/login", array(
        'module'     => 'backend',
        'controller' => 'login',
        'action'     => 'index',
    ));

    $router->add("/admin/products/:action", array(
        'module'     => 'backend',
        'controller' => 'products',
        'action'     => 1,
    ));

    $router->add("/products/:action", array(
        'controller' => 'products',
        'action'     => 1,
    ));

    return $router;
});

try {

    //Create an application
    $application = new Application($di);

    // Register the installed modules
    $application->registerModules(
        array(
            'frontend' => array(
                'className' => 'Multiple\Frontend\Module',
                'path'      => '../apps/frontend/Module.php',
            ),
            'backend'  => array(
                'className' => 'Multiple\Backend\Module',
                'path'      => '../apps/backend/Module.php',
            )
        )
    );

    //Handle the request
    echo $application->handle()->getContent();

} catch(\Exception $e){
    echo $e->getMessage();
}

