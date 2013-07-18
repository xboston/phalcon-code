<?php

// Create the router
$router = new \Phalcon\Mvc\Router();

//Define a route
$router->add(
    "/admin/:controller/a/:action/:params" ,
    array(
         "controller" => 1 ,
         "action"     => 2 ,
         "params"     => 3 ,
    )
);

