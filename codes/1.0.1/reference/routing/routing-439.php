<?php

$route = $router->add("/posts/{year}/{title}", "Posts::show");

$route->setName("show-posts");

//or just

$router->add("/posts/{year}/{title}", "Posts::show")->setName("show-posts");

