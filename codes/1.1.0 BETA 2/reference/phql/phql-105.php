<?php

// Исполнение простого запроса
$query = $this->modelsManager->createQuery("SELECT * FROM Cars");
$cars = $query->execute();

// Со связыванием (bound) параметров
$query = $this->modelsManager->createQuery("SELECT * FROM Cars WHERE name = :name:");
$cars = $query->execute(array(
    'name' => 'Audi'
));

