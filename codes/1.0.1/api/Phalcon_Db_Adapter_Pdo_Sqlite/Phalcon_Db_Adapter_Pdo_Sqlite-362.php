<?php

 //Deleting existing robot
 $success = $connection->delete(
     "robots",
     "id = 101"
 );

 //Next SQL sentence is generated
 DELETE FROM `robots` WHERE `id` = 101




