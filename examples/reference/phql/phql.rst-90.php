
    <?php

    // Экземпляр Query
    $query = new Phalcon\Mvc\Model\Query("SELECT * FROM Cars");

    // Назначение контейнера DI
    $query->setDI($di);

    // Выполнение запроса возвращает какой-то результат
    $cars = $query->execute();

