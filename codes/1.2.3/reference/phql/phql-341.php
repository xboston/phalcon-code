<?php

// How much are the prices of all the cars?
$phql = "SELECT SUM(price) AS summatory FROM Cars";
$row  = $manager->executeQuery($phql)->getFirst();
echo $row['summatory'];

// How many cars are by each brand?
$phql = "SELECT Cars.brand_id, COUNT(*) FROM Cars GROUP BY Cars.brand_id";
$rows = $manager->executeQuery($phql);
foreach ($rows as $row) {
    echo $row->brand_id, ' ', $row["1"], "\n";
}

// How many cars are by each brand?
$phql = "SELECT Brands.name, COUNT(*) FROM Cars JOIN Brands GROUP BY 1";
$rows = $manager->executeQuery($phql);
foreach ($rows as $row) {
    echo $row->name, ' ', $row["1"], "\n";
}

$phql = "SELECT MAX(price) AS maximum, MIN(price) AS minimum FROM Cars";
$rows = $manager->executeQuery($phql);
foreach ($rows as $row) {
    echo $row["maximum"], ' ', $row["minimum"], "\n";
}

// Count distinct used brands
$phql = "SELECT COUNT(DISTINCT brand_id) AS brandId FROM Cars";
$rows = $manager->executeQuery($phql);
foreach ($rows as $row) {
    echo $row->brandId, "\n";
}

