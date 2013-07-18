<?php

$di->set(
    'profiler' ,
    function () {
        return new \Phalcon\Db\Profiler();
    } ,
    true
);

$di->set(
    'db' ,
    function () use ($di) {

        $eventsManager = new \Phalcon\Events\Manager();

        //Get a shared instance of the DbProfiler
        $profiler = $di->getProfiler();

        //Listen all the database events
        $eventsManager->attach(
            'db' ,
            function ($event , $connection) use ($profiler) {
                if ( $event->getType() == 'beforeQuery' ) {
                    $profiler->startProfile($connection->getSQLStatement());
                }
                if ( $event->getType() == 'afterQuery' ) {
                    $profiler->stopProfile();
                }
            }
        );

        $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
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

