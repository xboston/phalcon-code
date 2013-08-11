<?php

$router = new Phalcon\Mvc\Router();

// ... define routes

$uri = str_replace($_SERVER["SCRIPT_NAME"], '', $_SERVER["REQUEST_URI"]);
$router->handle($uri);

