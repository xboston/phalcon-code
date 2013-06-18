<?php

// Create the router
$router = new \Phalcon\Mvc\Router();

//Define a route
$router->add(
    "/admin/users/my-profile",
    array(
        "controller" => "users",
        "action"     => "profile",
    )
);

//Another route
$router->add(
    "/admin/users/change-password",
    array(
        "controller" => "users",
        "action"     => "changePassword",
    )
);

$router->handle();

