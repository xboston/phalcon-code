<?php

// Simple database connection to localhost
$di->set(
    'mongo' ,
    function () {
        $mongo = new Mongo();

        return $mongo->selectDb("store");
    } ,
    true
);

// Connecting to a domain socket, falling back to localhost connection
$di->set(
    'mongo' ,
    function () {
        $mongo = new Mongo("mongodb:///tmp/mongodb-27017.sock,localhost:27017");

        return $mongo->selectDb("store");
    } ,
    true
);

