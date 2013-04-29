<?php

//Данный путь имеет два параметра, у каждого из которых задан формат
$app->get('/posts/{year:[0-9]+}/{title:[a-zA-Z\-]+}', function ($year, $title) {
    echo "<h1>Title: $title</h1>";
    echo "<h2>Year: $year</h2>";
});

