<?php

// Binding with PDO placeholders
$sql    = "SELECT * FROM robots WHERE name = ? ORDER BY name";
$result = $connection->query($sql , array( 1 => "Wall-E" ));


