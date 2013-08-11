<?php

// This route only will be matched if the HTTP method is GET
$router->addGet("/products/edit/{id}", "Products::edit");

// This route only will be matched if the HTTP method is POST
$router->addPost("/products/save", "Products::save");

// This route will be matched if the HTTP method is POST or PUT
$router->add("/products/update")->via(array("POST", "PUT"));

