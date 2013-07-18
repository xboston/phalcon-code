<?php

// Cache the files for 2 days using a Data frontend
$frontCache = new Phalcon\Cache\Frontend\Data(array(
    "lifetime" => 172800
));

// Create the component that will cache "Data" to a "File" backend
// Set the cache file directory - important to keep the "/" at the end of
// of the value for the folder
$cache = new Phalcon\Cache\Backend\File($frontCache, array(
    "cacheDir" => "../app/cache/"
));

// Try to get cached records
$cacheKey = 'robots_order_id.cache';
$robots    = $cache->get($cacheKey);
if ($robots === null) {

    // $robots is null because of cache expiration or data does not exist
    // Make the database call and populate the variable
    $robots = Robots::find(array("order" => "id"));

    // Store it in the cache
    $cache->save($cacheKey, $robots);
}

// Use $robots :)
foreach ($robots as $robot) {
   echo $robot->name, "\n";
}

