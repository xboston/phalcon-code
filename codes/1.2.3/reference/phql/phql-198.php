<?php

$phql = "SELECT c.id, c.name FROM Cars AS c ORDER BY c.name";
$cars = $manager->executeQuery($phql);
foreach ($cars as $car) {
    echo "Name: ", $car->name, "\n";
}

