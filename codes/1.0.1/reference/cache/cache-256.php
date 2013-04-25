<?php

$cacheKey = 'my.cache';

$robots = $cache->get($cacheKey);
if ($robots === null) {

    $robots = "some robots";

    // Задаем время жизни, сохранняя данные
    $cache->save($cacheKey, $robots, 3600);
}

