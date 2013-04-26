<?php

// Удаление одной записи
$phql = "DELETE FROM Cars WHERE id = 101";
$manager->executeQuery($phql);

// Удаление нескольких записей
$phql = "DELETE FROM Cars WHERE id > 100";
$manager->executeQuery($phql);

// Использование плейсхолдеров
$phql = "DELETE FROM Cars WHERE id BETWEEN :initial: AND :final:";
$manager->executeQuery(
    $phql,
    array(
        'initial' => 1,
        'final' => 100
    )
);

