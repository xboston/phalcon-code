<?php

$app = new Phalcon\Mvc\Micro();

$app->get(
    '/say/welcome/{name}' ,
    function ($name) {
        echo "<h1>Welcome $name!</h1>";
    }
);

$app->handle();

