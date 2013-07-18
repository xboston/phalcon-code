<?php

// Short form
$router->add("/posts/{year:[0-9]+}/{title:[a-z\-]+}" , "Posts::show");

// Array form
$router->add(
    "/posts/([0-9]+)/([a-z\-]+)" ,
    array(
         "controller" => "posts" ,
         "action"     => "show" ,
         "year"       => 1 ,
         "title"      => 2 ,
    )
);

