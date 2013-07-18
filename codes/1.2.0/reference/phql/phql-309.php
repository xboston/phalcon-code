<?php

$phql = "SELECT c.*, b.* FROM Cars c, Brands b WHERE b.id = c.brands_id";
$rows = $manager->executeQuery($phql);
foreach ( $rows as $row ) {
    echo "Car: " , $row->c->name , "\n";
    echo "Brand: " , $row->b->name , "\n";
}

