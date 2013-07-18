<?php

$phql = "SELECT Robots.* FROM Robots WHERE Robots.name = :name:";
$result = $manager->executeQuery($phql, array('name' => $name));

