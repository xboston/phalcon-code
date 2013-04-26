<?php

// Назначение сервиса кэширования представлений
$di->set('viewCache', function() {

    // Кэширование данных на сутки по умолчанию
    $frontCache = new \Phalcon\Cache\Frontend\Output(array(
        "lifetime" => 86400
    ));

    // Настройки соединения с Memcached
    $cache = new \Phalcon\Cache\Backend\Memcache($frontCache, array(
        "host" => "localhost",
        "port" => "11211"
    ));

    return $cache;
});

