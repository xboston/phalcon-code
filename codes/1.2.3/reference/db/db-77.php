<?php

// Required
$config = array(
    "host" => "localhost",
    "username" => "postgres",
    "password" => "secret1",
    "dbname" => "template"
);

// Optional
$config["schema"] = "public";

// Create a connection
$connection = new \Phalcon\Db\Adapter\Pdo\Postgresql($config);

