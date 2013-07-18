<?php

//Using the $config variable in the current scope
$di->set(
    "db" ,
    function () use ($config) {
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                                                      "host"     => $config->host ,
                                                      "username" => $config->username ,
                                                      "password" => $config->password ,
                                                      "dbname"   => $config->name
                                                 ));
    }
);

