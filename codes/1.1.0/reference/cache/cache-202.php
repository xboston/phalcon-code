<?php

// Delete an item with a specific key
$cache->queryKeys("someKey");

// Delete all items from the cache
$keys = $cache->queryKeys();
foreach ($keys as $key) {
    $cache->delete($key);
}


