<?php

//Getting first robot
$robot = $connection->fetchOne("SELECT * FROM robots");
print_r($robot);

//Getting first robot with associative indexes only
$robot = $connection->fetchOne("SELECT * FROM robots", Phalcon\Db::FETCH_ASSOC);
print_r($robot);




