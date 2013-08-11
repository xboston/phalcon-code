<?php

// Get the 'router' service
$router = $di['router'];

$router->handle();

$dispatcher = $di['dispatcher'];

// Pass the processed router parameters to the dispatcher
$dispatcher->setControllerName($router->getControllerName());
$dispatcher->setActionName($router->getActionName());
$dispatcher->setParams($router->getParams());

// Dispatch the request
$dispatcher->dispatch();

//Get the returned value by the lastest executed action
$response = $dispatcher->getReturnedValue();

//Check if the action returned is a 'response' object
if ($response instanceof Phalcon\Http\ResponseInterface) {

    //Send the request
    $response->send();
}

