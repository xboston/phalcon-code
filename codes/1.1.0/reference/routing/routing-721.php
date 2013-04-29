<?php

$di['router'] = function() {

    //Use the annotations router
    $router = new \Phalcon\Mvc\Router\Annotations(false);

    //Read the annotations from ProductsController if the uri starts with /api/products
    $router->addResource('Products', '/api/products');

    return $router;
};

