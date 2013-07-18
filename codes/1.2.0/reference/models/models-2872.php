<?php

use Phalcon\Logger , Phalcon\Db\Adapter\Pdo\Mysql as Connection , Phalcon\Events\Manager , Phalcon\Logger\Adapter\File;

$di->set(
    'db' ,
    function () {

        $eventsManager = new EventsManager();

        $logger = new Logger("app/logs/debug.log");

        //Listen all the database events
        $eventsManager->attach(
            'db' ,
            function ($event , $connection) use ($logger) {
                if ( $event->getType() == 'beforeQuery' ) {
                    $logger->log($connection->getSQLStatement() , Logger::INFO);
                }
            }
        );

        $connection = new Connection(array(
                                          "host"     => "localhost" ,
                                          "username" => "root" ,
                                          "password" => "secret" ,
                                          "dbname"   => "invo"
                                     ));

        //Assign the eventsManager to the db adapter instance
        $connection->setEventsManager($eventsManager);

        return $connection;
    }
);

