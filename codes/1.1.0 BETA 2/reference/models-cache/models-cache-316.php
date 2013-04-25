<?php

$phql = "SELECT * FROM Cars WHERE name = :name:";

$query = $this->modelsManager->executeQuery($phql);

$query->setCache(array(
    "key" => "cars-by-name",
    "lifetime" => 300
));

$cars = $query->execute(array(
    'name' => 'Audi'
));

