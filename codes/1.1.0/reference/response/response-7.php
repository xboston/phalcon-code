<?php

// Getting a response instance
$response = new \Phalcon\Http\Response();

//Set status code
$response->setRawHeader(404, "Not Found");

//Set the content of the response
$response->setContent("Sorry, the page doesn't exist");

//Send response to the client
$response->send();

