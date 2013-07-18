<?php

//Executing a simple query
$query = $this->modelsManager->createQuery("SELECT * FROM Cars");
$cars  = $query->execute();

//With bound parameters
$query = $this->modelsManager->createQuery("SELECT * FROM Cars WHERE name = :name:");
$cars  = $query->execute(
    array(
         'name' => 'Audi'
    )
);

