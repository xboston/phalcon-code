<?php

//Executing a simple query
$cars = $this->modelsManager->executeQuery("SELECT * FROM Cars");

//Executing with bound parameters
$cars = $this->modelsManager->executeQuery(
    "SELECT * FROM Cars WHERE name = :name:" ,
    array(
         'name' => 'Audi'
    )
);

