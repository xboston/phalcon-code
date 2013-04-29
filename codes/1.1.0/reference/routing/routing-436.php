<?php

$route = $router->add("/posts/{year}/{title}", "Posts::show");

$route->setName("show-posts");

// или проще

$router->add("/posts/{year}/{title}", "Posts::show")->setName("show-posts");

