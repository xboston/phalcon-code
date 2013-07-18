<?php

// Query all keys used in the cache
$keys = $cache->queryKeys();
foreach ($keys as $key) {
    $data = $cache->get($key);
    echo "Key=", $key, " Data=", $data;
}

//Query keys in the cache that begins with "my-prefix"
$keys = $cache->queryKeys("my-prefix");


