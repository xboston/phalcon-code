<?php

$ultraFastFrontend = new Phalcon\Cache\Frontend\Data(array(
    "lifetime" => 3600
));

$fastFrontend = new Phalcon\Cache\Frontend\Data(array(
    "lifetime" => 86400
));

$slowFrontend = new Phalcon\Cache\Frontend\Data(array(
    "lifetime" => 604800
));

// Backends от самого быстрого до самого медленного
$cache = new \Phalcon\Cache\Multiple(array(
    new Phalcon\Cache\Backend\Apc($ultraFastFrontend, array(
        "prefix" => 'cache',
    )),
    new Phalcon\Cache\Backend\Memcache($fastFrontend, array(
        "prefix" => 'cache',
        "host" => "localhost",
        "port" => "11211"
    )),
    new Phalcon\Cache\Backend\File($slowFrontend, array(
        "prefix" => 'cache',
        "cacheDir" => "../app/cache/"
    ))
));

// Сохраняем, сохраняется сразу во все адаптеры кэширования
$cache->save('my-key', $data);

