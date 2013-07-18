<?php

// Inserting without columns
$phql = "INSERT INTO Cars VALUES (NULL, 'Lamborghini Espada', " . "7, 10000.00, 1969, 'Grand Tourer')";
$manager->executeQuery($phql);

// Specifyng columns to insert
$phql = "INSERT INTO Cars (name, brand_id, year, style) " . "VALUES ('Lamborghini Espada', 7, 1969, 'Grand Tourer')";
$manager->executeQuery($phql);

// Inserting using placeholders
$phql = "INSERT INTO Cars (name, brand_id, year, style) " . "VALUES (:name:, :brand_id:, :year:, :style)";
$manager->executeQuery(
    $sql ,
    array(
         'name'     => 'Lamborghini Espada' ,
         'brand_id' => 7 ,
         'year'     => 1969 ,
         'style'    => 'Grand Tourer' ,
    )
);

