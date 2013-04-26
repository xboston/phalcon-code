<?php

// Создание маршрутизатора
$router = new \Phalcon\Mvc\Router();

// Определение правила маршрутизации
$router->add(
    "/admin/:controller/a/:action/:params",
    array(
        "controller" => 1,
        "action"     => 2,
        "params"     => 3,
    )
);

