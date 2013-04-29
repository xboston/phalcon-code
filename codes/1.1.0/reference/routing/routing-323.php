<?php

// This route only will be matched if the HTTP method is GET
$router->addGet("/products/edit/{id}", "Posts::edit");

// This route only will be matched if the HTTP method is POST
$router->addPost("/products/save", "Posts::save");

// This route will be matched if the HTTP method is POST or PUT
$router->add("/products/update")->via(array("POST", "PUT"));

