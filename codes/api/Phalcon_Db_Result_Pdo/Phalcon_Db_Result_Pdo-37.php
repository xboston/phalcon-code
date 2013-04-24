<?php

$result = $connection->query("SELECT * FROM robots ORDER BY name");
$result->setFetchMode(Phalcon\Db::FETCH_OBJ);
while ($robot = $result->fetch()) {
    echo $robot->name;
}




