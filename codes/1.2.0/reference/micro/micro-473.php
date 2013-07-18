<?php

use Phalcon\Mvc\Micro\Collection as MicroCollection;

$posts = new MicroCollection();

//Set the main handler. ie. a controller instance
$posts->setHandler(new PostsController());

//Set a common prefix for all routes
$posts->setPrefix('/posts');

//Use the method 'index' in PostsController
$posts->get('/' , 'index');

//Use the method 'show' in PostsController
$posts->get('/show/{slug}' , 'show');

$app->mount($posts);

