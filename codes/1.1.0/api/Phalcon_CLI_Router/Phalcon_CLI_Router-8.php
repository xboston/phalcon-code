<?php

$router = new Phalcon\CLI\Router();
$router->handle(array(
    'module' => 'main',
    'task' => 'videos',
    'action' => 'process'
));
echo $router->getTaskName();



