<?php

$app = new Phalcon\Mvc\Micro();

//Return a response
$app->get('/welcome/index', function() {

    $response = new Phalcon\Http\Response();

    $response->setStatusCode(401, "Unauthorized");

    $response->setContent("Access is not authorized");

    return $response;
});

