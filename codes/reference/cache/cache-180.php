
    <?php

    // Получаем все ключи, которые хранятся в кэше
    $keys = $cache->queryKeys();
    foreach ($keys as $key) {
        $data = $cache->get($key);
        echo "Key=", $key, " Data=", $data;
    }

    // Получаем все ключи, которые начинаются с префикса "my-prefix"
    $keys = $cache->queryKeys("my-prefix");


