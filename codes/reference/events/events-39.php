<?php

$eventsManager = new \Phalcon\Events\Manager();

// Создание слушателе базы данных
$dbListener = new MyDbListener()

// Слушать все события базы данных
$eventsManager->attach('db', $dbListener);

$connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
    "host" => "localhost",
    "username" => "root",
    "password" => "secret",
    "dbname" => "invo"
));

// Совмещение менеджера событий с адаптером базы данных
$connection->setEventsManager($eventsManager);

// Выполнение SQL запроса
$connection->query("SELECT * FROM products p WHERE p.status = 1");

