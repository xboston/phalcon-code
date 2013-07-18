<?php

$app->get(
    '/show/data' ,
    function () use ($app) {

        //Set the Content-Type header
        $app->response->setContentType('text/plain')->sendHeaders();

        //Print a file
        readfile("data.txt");

    }
);

