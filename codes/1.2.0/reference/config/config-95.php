<?php

$config = new \Phalcon\Config(array(
                                   'database' => array(
                                       'host'   => 'localhost' ,
                                       'dbname' => 'test_db'
                                   ) ,
                                   'debug'    => 1
                              ));

$config2 = new \Phalcon\Config(array(
                                    'database' => array(
                                        'username' => 'scott' ,
                                        'password' => 'secret' ,
                                    )
                               ));

$config->merge($config2);

print_r($config);

