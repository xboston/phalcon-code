<?php

// Индивидуальные методы
$router->setDefaultModule("backend");
$router->setDefaultNamespace('Backend\Controllers');
$router->setDefaultController("index");
$router->setDefaultAction("index");

// Используя значения массива
$router->setDefaults(array(
    "controller" => "index",
    "action" => "index"
));

