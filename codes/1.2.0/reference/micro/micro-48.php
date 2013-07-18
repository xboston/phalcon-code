<?php

// With a function
function say_hello($name)
{
    echo "<h1>Hello! $name</h1>";
}

$app->get('/say/hello/{name}' , "say_hello");

// With a static method
$app->get('/say/hello/{name}' , "SomeClass::someSayMethod");

// With a method in an object
$myController = new MyController();
$app->get('/say/hello/{name}' , array( $myController , "someAction" ));

//Anonymous function
$app->get(
    '/say/hello/{name}' ,
    function ($name) {
        echo "<h1>Hello! $name</h1>";
    }
);

