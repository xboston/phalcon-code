<?php

use Phalcon\Mvc\Micro,
    Phalcon\Http\Response;

$app = new Micro();

//Return a response
$app->get('/welcome/index', function() {

    $response = new Response();

    $response->setStatusCode(401, "Unauthorized");

    $response->setContent("Access is not authorized");

    return $response;
});

