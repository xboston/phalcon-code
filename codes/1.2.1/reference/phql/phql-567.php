<?php

// Deleting a single row
$phql = "DELETE FROM Cars WHERE id = 101";
$manager->executeQuery($phql);

// Deleting multiple rows
$phql = "DELETE FROM Cars WHERE id > 100";
$manager->executeQuery($phql);

// Using placeholders
$phql = "DELETE FROM Cars WHERE id BETWEEN :initial: AND :final:";
$manager->executeQuery(
    $phql,
    array(
        'initial' => 1,
        'final' => 100
    )
);

