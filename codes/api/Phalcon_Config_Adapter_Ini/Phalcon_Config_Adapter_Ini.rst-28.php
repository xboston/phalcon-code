
    <?php

    $config = new Phalcon\Config\Adapter\Ini("path/config.ini");
    echo $config->phalcon->controllersDir;
    echo $config->database->username;



