
    <?php

    // Создание логгера
    $logger = new \Phalcon\Logger\Adapter\File("app/logs/test.log");

    // Начало транзакции
    $logger->begin();

    // Добавление записей
    $logger->alert("This is an alert");
    $logger->error("This is another error");

    // Размещение записей в файл
    $logger->commit();

