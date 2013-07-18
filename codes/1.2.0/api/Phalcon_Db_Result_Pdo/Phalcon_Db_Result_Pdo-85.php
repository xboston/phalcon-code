<?php

$result = $connection->query("SELECT * FROM robots ORDER BY name");
echo 'There are ' , $result->numRows() , ' rows in the resulset';




