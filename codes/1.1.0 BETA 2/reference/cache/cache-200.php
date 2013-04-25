<?php

// Удаляем элемент по определенному ключу
$cache->queryKeys("someKey");

// Удаляем все из кэша
$keys = $cache->queryKeys();
foreach ($keys as $key) {
    $cache->delete($key);
}


