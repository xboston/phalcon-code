<?php

//Listen all the database events
$eventManager->attach(
    'db' ,
    function ($event , $connection) {
        if ( $event->getType() == 'afterQuery' ) {
            echo $connection->getSQLStatement();
        }
    }
);

