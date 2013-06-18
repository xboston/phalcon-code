<?php

$cacheKey = 'my.cache';

$robots = $cache->get($cacheKey);
if ($robots === null) {

    $robots = "some robots";

    //Setting the cache when saving data
    $cache->save($cacheKey, $robots, 3600);
}

