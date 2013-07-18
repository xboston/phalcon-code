<?php

//Updating existing robot
$success = $connection->update(
    "robots" ,
    array( "name" ) ,
    array( "New Astro Boy" ) ,
    "id = 101"
);

//Next SQL sentence is sent to the database system
UPDATE `robots` SET `name` = "Astro boy" WHERE id = 101




