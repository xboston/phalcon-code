
    <?php

    $config = new \Phalcon\Config\Adapter\Ini("path/config.ini");

    echo $config->phalcon->controllersDir, "\n";
    echo $config->database->username, "\n";
    echo $config->models->metadata->adapter, "\n";

