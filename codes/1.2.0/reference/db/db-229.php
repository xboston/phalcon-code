<?php

// Binding with numeric placeholders
$sql    = "SELECT * FROM robots WHERE name = ?1 ORDER BY name";
$sql    = $connection->bindParams($sql , array( 1 => "Wall-E" ));
$result = $connection->query($sql);

// Binding with named placeholders
$sql     = "INSERT INTO `robots`(name`, year) VALUES (:name:, :year:)";
$sql     = $connection->bindParams($sql , array( "name" => "Astro Boy" , "year" => 1952 ));
$success = $connection->query($sql);

