
    <?php

    $di = new \Phalcon\DI\FactoryDefault();

    // Настройка сервиса базы данных
    $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => "localhost",
            "username" => "asimov",
            "password" => "zeroth",
            "dbname" => "robotics"
        ));
    });

    $app = new \Phalcon\Mvc\Micro();

    // Назначает DI приложению
    $app->setDI($di);

