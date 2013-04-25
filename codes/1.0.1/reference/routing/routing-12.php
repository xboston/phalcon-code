<?php

// Создание маршрутизатора
$router = new \Phalcon\Mvc\Router();

// Определение правила маршрутизации
$router->add(
    "/admin/users/my-profile",
    array(
        "controller" => "users",
        "action"     => "profile",
    )
);

// Еще одно правило
$router->add(
    "/admin/users/change-password",
    array(
        "controller" => "users",
        "action"     => "changePassword",
    )
);

$router->handle();

