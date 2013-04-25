<?php

// Маршрут соответствует только HTTP методу GET
$router->addGet("/products/edit/{id}", "Posts::edit");

// Маршрут соответствует только HTTP методу POST
$router->addPost("/products/save", "Posts::save");

// Маршрут соответствует сразу двум HTTP методам POST и PUT
$router->add("/products/update")->via(array("POST", "PUT"));

