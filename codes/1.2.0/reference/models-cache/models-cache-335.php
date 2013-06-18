<?php

$phql = "SELECT * FROM Cars WHERE name = :name:";

$cars = $this->modelsManager->executeQuery($phql, array(
    'name' => 'Audi'
));

apc_store('my-cars', $cars);

