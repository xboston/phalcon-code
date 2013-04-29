<?php

$di->set('db', function() {

    $eventsManager = new \Phalcon\Events\Manager();

    $logger = new \Phalcon\Logger\Adapter\File("app/logs/debug.log");

    //Listen all the database events
    $eventsManager->attach('db', function($event, $connection) use ($logger) {
        if ($event->getType() == 'beforeQuery') {
            $logger->log($connection->getSQLStatement(), \Phalcon\Logger::INFO);
        }
    });

    $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "localhost",
        "username" => "root",
        "password" => "secret",
        "dbname" => "invo"
    ));

    //Assign the eventsManager to the db adapter instance
    $connection->setEventsManager($eventsManager);

    return $connection;
});

