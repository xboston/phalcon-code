<?php

// Basic configuration
$config = array(
    'username' => 'scott',
    'password' => 'tiger',
    'dbname' => '192.168.10.145/orcl',
);

// Advanced configuration
$config = array(
    'dbname' => '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521)))(CONNECT_DATA=(SERVICE_NAME=xe)(FAILOVER_MODE=(TYPE=SELECT)(METHOD=BASIC)(RETRIES=20)(DELAY=5))))',
    'username' => 'scott',
    'password' => 'tiger',
    'charset' => 'AL32UTF8',
);

// Create a connection
$connection = new \Phalcon\Db\Adapter\Pdo\Oracle($config);

