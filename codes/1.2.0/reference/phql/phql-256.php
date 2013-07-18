<?php

$phql = "SELECT Cars.name AS car_name, Brands.name AS brand_name FROM Cars JOIN Brands";
$rows = $manager->executeQuery($phql);
foreach ( $rows as $row ) {
    echo $row->car_name , "\n";
    echo $row->brand_name , "\n";
}

