<?php

//This route have two parameters and each of them have a format
$app->get(
    '/posts/{year:[0-9]+}/{title:[a-zA-Z\-]+}' ,
    function ($year , $title) {
        echo "<h1>Title: $title</h1>";
        echo "<h2>Year: $year</h2>";
    }
);

