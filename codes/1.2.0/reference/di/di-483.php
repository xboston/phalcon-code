<?php

$di->set(
    "db" ,
    function () {
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                                                      "host"     => "localhost" ,
                                                      "username" => "root" ,
                                                      "password" => "secret" ,
                                                      "dbname"   => "blog"
                                                 ));
    }
);

