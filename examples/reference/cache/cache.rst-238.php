
    <?php

    $cacheKey = 'my.cache';

    // Получаем кэш и задаем время жизни
    $robots = $cache->get($cacheKey, 3600);
    if ($robots === null) {

        $robots = "some robots";

        // Сохраняем в кэше
        $cache->save($cacheKey, $robots);
    }

