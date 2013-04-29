<?php

$di['router'] = function() {

    // Используем роутер на аннотациях
    $router = new \Phalcon\Mvc\Router\Annotations(false);

    // Чтение аннотаций из контроллера ProductsController для ссылок начинающихся на /api/products
    $router->addResource('Products', '/api/products');

    return $router;
};

