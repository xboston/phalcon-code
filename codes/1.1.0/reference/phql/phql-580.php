<?php

$phql = "SELECT Robots.*
    FROM Robots JOIN RobotsParts p
    ORDER BY Robots.name LIMIT 20";
$result = $manager->executeQuery($phql);

