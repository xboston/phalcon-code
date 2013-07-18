<?php

// Request the services from the services container
$router = $di['router'];

$router->handle();

$view = $di['view'];

$dispatcher = $di['dispatcher'];

// Pass the processed router parameters to the dispatcher
$dispatcher->setControllerName($router->getControllerName());
$dispatcher->setActionName($router->getActionName());
$dispatcher->setParams($router->getParams());

// Start the view
$view->start();

// Dispatch the request
$dispatcher->dispatch();

// Render the related views
$view->render(
    $dispatcher->getControllerName() ,
    $dispatcher->getActionName() ,
    $dispatcher->getParams()
);

// Finish the view
$view->finish();

$response = $di['response'];

// Pass the output of the view to the response
$response->setContent($view->getContent());

// Send the request headers
$response->sendHeaders();

// Print the response
echo $response->getContent();

