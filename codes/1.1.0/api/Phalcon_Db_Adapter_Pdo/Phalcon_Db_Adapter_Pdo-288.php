<?php

 //Inserting a new robot with a valid default value for the column 'id'
 $success = $connection->insert(
     "robots",
     array($connection->getDefaultIdValue(), "Astro Boy", 1952),
     array("id", "name", "year")
 );




