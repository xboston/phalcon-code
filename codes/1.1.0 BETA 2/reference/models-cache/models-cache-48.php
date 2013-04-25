<?php

// Get products without caching
$products = Products::find();

// Just cache the resultset. The cache will expire in 1 hour (3600 seconds)
$products = Products::find(array(
    "cache" => array("key" => "my-cache")
));

// Cache the resultset for only for 5 minutes
$products = Products::find(array(
    "cache" => array("key" => "my-cache", "lifetime" => 300)
));

// Using a custom cache
$products = Products::find(array("cache" => $myCache));

