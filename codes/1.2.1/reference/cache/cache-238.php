<?php

$cacheKey = 'my.cache';

//Setting the cache when getting a result
$robots = $cache->get($cacheKey, 3600);
if ($robots === null) {

    $robots = "some robots";

    // Store it in the cache
    $cache->save($cacheKey, $robots);
}

