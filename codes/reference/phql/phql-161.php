<?php

$phql   = "SELECT c.name FROM Cars AS c "
   . "WHERE c.brand_id = 21 ORDER BY c.name LIMIT 100";
$query = $manager->createQuery($phql);

