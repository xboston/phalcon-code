<?php

// Inserting data with a raw SQL statement
$sql     = "INSERT INTO `robots`(`name`, `year`) VALUES ('Astro Boy', 1952)";
$success = $connection->execute($sql);

//With placeholders
$sql     = "INSERT INTO `robots`(`name`, `year`) VALUES (?, ?)";
$success = $connection->execute($sql, array('Astroy Boy', 1952));

// Generating dynamically the necessary SQL
$success = $connection->insert(
   "robots",
   array("Astro Boy", 1952),
   array("name", "year")
);

// Updating data with a raw SQL statement
$sql     = "UPDATE `robots` SET `name` = 'Astro boy' WHERE `id` = 101";
$success = $connection->execute($sql);

//With placeholders
$sql     = "UPDATE `robots` SET `name` = ? WHERE `id` = ?";
$success = $connection->execute($sql, array('Astroy Boy', 101));

// Generating dynamically the necessary SQL
$success = $connection->update(
   "robots",
   array("name"),
   array("New Astro Boy"),
   "id = 101"
);

// Deleting data with a raw SQL statement
$sql     = "DELETE `robots` WHERE `id` = 101";
$success = $connection->execute($sql);

//With placeholders
$sql     = "DELETE `robots` WHERE `id` = ?";
$success = $connection->execute($sql, array(101));

// Generating dynamically the necessary SQL
$success = $connection->delete("robots", "id = 101");

