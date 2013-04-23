<?php

$config = array(
    "host" => "192.168.0.11",
    "dbname" => "blog",
    "port" => 3306,
    "username" => "sigma",
    "password" => "secret"
);

$connection = new Phalcon\Db\Adapter\Pdo\Mysql($config);



