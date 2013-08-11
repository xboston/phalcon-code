<?php

$router = new Phalcon\Mvc\Router();

  $router->add(
    "/documentation/{chapter}/{name}.{type:[a-z]+}",
    array(
        "controller" => "documentation",
        "action"     => "show"
    )
);

$router->handle();

echo $router->getControllerName();



