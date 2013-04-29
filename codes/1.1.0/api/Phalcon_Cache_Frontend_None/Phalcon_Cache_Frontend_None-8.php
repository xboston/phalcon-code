<?php

//Create a None Cache
$frontCache = new Phalcon\Cache\Frontend\None();

// Create the component that will cache "Data" to a "Memcached" backend
// Memcached connection settings
$cache = new Phalcon\Cache\Backend\Memcache($frontCache, array(
    "host" => "localhost",
    "port" => "11211"
));

// This Frontend always return the data as it's returned by the backend
$cacheKey = 'robots_order_id.cache';
$robots    = $cache->get($cacheKey);
if ($robots === null) {

    // This cache doesn't perform any expiration checking, so the data is always expired
    // Make the database call and populate the variable
    $robots = Robots::find(array("order" => "id"));

    $cache->save($cacheKey, $robots);
}

// Use $robots :)
foreach ($robots as $robot) {
    echo $robot->name, "\n";
}



