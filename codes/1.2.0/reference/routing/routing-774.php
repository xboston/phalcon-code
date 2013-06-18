<?php

//Create a group with a common module and controller
$blog = new \Phalcon\Mvc\Router\Group(array(
    'module' => 'blog',
    'controller' => 'posts'
));

//Hostname restriction
$blog->setHostName('blog.mycompany.com');

//All the routes start with /blog
$blog->setPrefix('/blog');

//Default route
$blog->add('/', array(
    'action' => 'index'
));

//Add a route to the group
$blog->add('/save', array(
    'action' => 'save'
));

//Add another route to the group
$blog->add('/edit/{id}', array(
    'action' => 'edit'
));

//Add the group to the router
$router->mount($blog);

