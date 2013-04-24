<?php

$phql = "UPDATE Robots SET name = :name:, type = :type:, year = :year: WHERE id = :id:";
$status = $app->modelsManager->executeQuery($phql, array(
   'id' => 100,
   'name' => 'Astroy Boy',
   'type' => 'mechanical',
   'year' => 1959
));

 //Check if the update was successful
if ($status->success() == true) {
   echo 'OK';
}



