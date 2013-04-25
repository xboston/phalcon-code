<?php

 //Inserting a new robot
 $success = $connection->insert(
     "robots",
     array("Astro Boy", 1952),
     array("name", "year")
 );

 //Next SQL sentence is sent to the database system
 INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);




