<?php

$result = $connection->query("SELECT * FROM robots ORDER BY name");
$robots = $result->fetchAll();




