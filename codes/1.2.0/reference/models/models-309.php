<?php

// Query all records from model parts
$parts = Parts::find();

// Store the resultset into a file
file_put_contents("cache.txt" , serialize($parts));

// Get parts from file
$parts = unserialize(file_get_contents("cache.txt"));

// Traverse the parts
foreach ( $parts as $part ) {
    echo $part->id;
}

