<?php

// Create a connection with PDO options
$connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                                                     "host"     => "localhost" ,
                                                     "username" => "root" ,
                                                     "password" => "sigma" ,
                                                     "dbname"   => "test_db" ,
                                                     "options"  => array(
                                                         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES \'UTF8\'" ,
                                                         PDO::ATTR_CASE               => PDO::CASE_LOWER
                                                     )
                                                ));

