<?php

//Make a connection
$connection = new Phalcon\Db\Adapter\Pdo\Mysql(array(
                                                    'host'     => '192.168.0.11' ,
                                                    'username' => 'sigma' ,
                                                    'password' => 'secret' ,
                                                    'dbname'   => 'blog' ,
                                               ));

//Reconnect
$connection->connect();




