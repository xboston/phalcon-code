<?php

//Inserting data
$success = $connection->execute("INSERT INTO robots VALUES (1, 'Astro Boy')");
$success = $connection->execute("INSERT INTO robots VALUES (?, ?)", array(1, 'Astro Boy'));




