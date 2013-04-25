<?php

// Cache the resultset for only for 5 minutes
$products = Products::find(array(
    "cache" => array("key" => "my-cache", "lifetime" => 300)
));

