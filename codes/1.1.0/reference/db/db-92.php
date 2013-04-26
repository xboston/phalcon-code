<?php

// Required
$config = array(
    "dbname" => "/path/to/database.db"
);

// Create a connection
$connection = new \Phalcon\Db\Adapter\Pdo\Sqlite($config);

