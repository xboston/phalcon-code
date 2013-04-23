
    <?php

    $lifetime = 3600;
    $cacheKey = 'my.cache';

    $robots = $cache->get($cacheKey, $lifetime);
    if ($robots === null) {

        $robots = "some robots";

        $cache->save($cacheKey, $robots, $lifetime);
    }

