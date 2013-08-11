<?php

$app->get('/show/data', function () {

    //Create a response
    $response = new Phalcon\Http\Response();

    //Set the Content-Type header
    $response->setContentType('text/plain');

    //Pass the content of a file
    $response->setContent(file_get_contents("data.txt"));

    //Return the response
    return $response;
});

