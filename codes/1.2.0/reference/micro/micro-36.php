<?php

$app->get(
    '/say/hello/{name}' ,
    function ($name) {
        echo "<h1>Hello! $name</h1>";
    }
);

