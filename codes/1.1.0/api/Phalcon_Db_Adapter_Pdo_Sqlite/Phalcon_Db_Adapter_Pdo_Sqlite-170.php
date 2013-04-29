<?php

$sql = $connection->bindParams('SELECT * FROM robots WHERE name = ?0', array('Bender'));
  echo $sql; // SELECT * FROM robots WHERE name = 'Bender'




