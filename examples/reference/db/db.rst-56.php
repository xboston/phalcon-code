
    <?php

    // Required
    $config = array(
        "host" => "127.0.0.1",
        "username" => "mike",
        "password" => "sigma",
        "dbname" => "test_db"
    );

    // Optional
    $config["persistent"] = false;

    // Create a connection
    $connection = new \Phalcon\Db\Adapter\Pdo\Mysql($config);

