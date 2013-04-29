<?php

//This service returns a MySQL database
$di->set('dbMysql', function() {
     return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "localhost",
        "username" => "root",
        "password" => "secret",
        "dbname" => "invo"
    ));
});

//This service returns a PostgreSQL database
$di->set('dbPostgres', function() {
     return new \Phalcon\Db\Adapter\Pdo\PostgreSQL(array(
        "host" => "localhost",
        "username" => "postgres",
        "password" => "",
        "dbname" => "invo"
    ));
});

