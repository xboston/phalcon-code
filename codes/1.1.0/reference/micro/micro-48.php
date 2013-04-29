<?php

//С помощью функции
function say_hello($name) {
    echo "<h1>Hello! $name</h1>";
}

$app->get('/say/hello/{name}', "say_hello");

// С помощью статичного метода
$app->get('/say/hello/{name}', "SomeClass::someSayMethod");

// С помощью метода объекта
$myController = new MyController();
$app->get('/say/hello/{name}', array($myController, "someAction"));

//Анонимная функция (замыкание)
$app->get('/say/hello/{name}', function ($name) {
    echo "<h1>Hello! $name</h1>";
});

