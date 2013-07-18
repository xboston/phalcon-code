<?php

//Cache data for one hour
$frontCache = new Phalcon\Cache\Frontend\Data(array(
                                                   "lifetime" => 3600
                                              ));

// Create the component that will cache "Data" to a "Memcached" backend
// Memcached connection settings
$cache = new Phalcon\Cache\Backend\Memcache($frontCache , array(
                                                               "host" => "localhost" ,
                                                               "port" => "11211"
                                                          ));

// Try to get cached records
$cacheKey = 'robots_order_id.cache';
$robots   = $cache->get($cacheKey);
if ( $robots === null ) {

    // $robots is null because of cache expiration or data does not exist
    // Make the database call and populate the variable
    $robots = Robots::find(array( "order" => "id" ));

    // Store it in the cache
    $cache->save($cacheKey , $robots);
}

// Use $robots :)
foreach ( $robots as $robot ) {
    echo $robot->name , "\n";
}

