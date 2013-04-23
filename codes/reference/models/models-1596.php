<?php

$productTypesId = 1;
$name = 'Artichoke';
$price = 10.5;
$active = 'Y';

$sql = 'INSERT INTO products VALUES (null, :productTypesId, :name, :price, :active)';
$sth = $dbh->prepare($sql);

$sth->bindParam(':productTypesId', $productTypesId, PDO::PARAM_INT);
$sth->bindParam(':name', $name, PDO::PARAM_STR, 70);
$sth->bindParam(':price', doubleval($price));
$sth->bindParam(':active', $active, PDO::PARAM_STR, 1);

$sth->execute();

