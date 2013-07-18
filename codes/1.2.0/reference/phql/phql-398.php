<?php

$phql = "SELECT * FROM Cars WHERE Cars.name = :name:";
$cars = $manager->executeQuery($phql , array( "name" => 'Lamborghini Espada' ));

$phql = "SELECT * FROM Cars WHERE Cars.name = ?0";
$cars = $manager->executeQuery($phql , array( 0 => 'Lamborghini Espada' ));


