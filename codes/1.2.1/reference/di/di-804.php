<?php

//Register the "register" service
$di->set('request', 'Phalcon\Http\Request');

//Get the service
$requestService = $di->getService('request');

//Change its definition
$requestService->setDefinition(function() {
    return new Phalcon\Http\Request();
});

//Change it to shared
$request->setShared(true);

//Resolve the service (return a Phalcon\Http\Request instance)
$request = $requestService->resolve();

