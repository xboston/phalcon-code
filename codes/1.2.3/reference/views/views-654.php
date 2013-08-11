<?php

use Phalcon\Cache\Frontend\Output as OutputFrontend,
    Phalcon\Cache\Backend\Memcache as MemcacheBackend;

//Set the views cache service
$di->set('viewCache', function() {

    //Cache data for one day by default
    $frontCache = new OutputFrontend(array(
        "lifetime" => 86400
    ));

    //Memcached connection settings
    $cache = new MemcacheBackend($frontCache, array(
        "host" => "localhost",
        "port" => "11211"
    ));

    return $cache;
});

