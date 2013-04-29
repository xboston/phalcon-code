<?php

$di['router'] = function() {

    // Используем роутер на аннотациях
    $router = new \Phalcon\Mvc\Router\Annotations(false);

    // Чтение аннотаций из контроллера Backend\Controllers\ProductsController для ссылок начинающихся на /api/products
    $router->addModuleResource('backend', 'Products', '/api/products');

    return $router;
};

