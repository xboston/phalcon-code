<?php

// Creating a router
$router = new \Phalcon\Mvc\Router();

// Define routes here if any
// ...

// Taking URI from $_GET["_url"]
$router->handle();

// or Setting the URI value directly
$router->handle("/employees/edit/17");

// Getting the processed controller
echo $router->getControllerName();

// Getting the processed action
echo $router->getActionName();

//Get the matched route
$route = $router->getMatchedRoute();

