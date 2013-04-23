<?php

// Слушаем все события базы данных
$eventManager->attach('db', function($event, $connection) {
    if ($event->getType() == 'afterQuery') {
        echo $connection->getSQLStatement();
    }
});

