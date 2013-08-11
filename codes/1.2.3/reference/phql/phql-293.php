<?php

$phql = "SELECT Cars.*, Brands.* FROM Cars, Brands WHERE Brands.id = Cars.brands_id";
$rows = $manager->executeQuery($phql);
foreach ($rows as $row) {
    echo "Car: ", $row->cars->name, "\n";
    echo "Brand: ", $row->brands->name, "\n";
}

