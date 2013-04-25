<?php

$router = new Phalcon\Mvc\Router();

// ... указание правил маршрутизации

$uri = str_replace($_SERVER["SCRIPT_NAME"], '', $_SERVER["REQUEST_URI"]);
$router->handle($uri);

