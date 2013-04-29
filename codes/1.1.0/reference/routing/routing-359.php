<?php

$router = new \Phalcon\Mvc\Router();

//Create a group with a common module and controller
$blog = new \Phalcon\Mvc\Router\Group(array(
    'module' => 'blog',
    'controller' => 'index'
));

//All the routes start with /blog
$blog->setPrefix('/blog');

//Add a route to the group
$blog->add('/save', array(
    'action' => 'save'
));

//Add another route to the group
$blog->add('/edit/{id}', array(
    'action' => 'edit'
));

//This route maps to a controller different than the default
$blog->add('/blog', array(
    'controller' => 'about',
    'action' => 'index'
));

//Add the group to the router
$router->mount($blog);

