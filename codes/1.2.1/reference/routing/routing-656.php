<?php

//Setting a specific default
$router->setDefaultModule("backend");
$router->setDefaultNamespace('Backend\Controllers');
$router->setDefaultController("index");
$router->setDefaultAction("index");

//Using an array
$router->setDefaults(array(
    "controller" => "index",
    "action" => "index"
));

