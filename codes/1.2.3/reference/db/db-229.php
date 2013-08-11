<?php

// Binding with numeric placeholders
$sql    = "SELECT * FROM robots WHERE name = ? ORDER BY name";
$result = $connection->query($sql, array("Wall-E"));

// Binding with named placeholders
$sql     = "INSERT INTO `robots`(name`, year) VALUES (:name, :year)";
$success = $connection->query($sql, array("name" => "Astro Boy", "year" => 1952));

