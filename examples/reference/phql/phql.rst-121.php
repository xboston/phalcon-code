
    <?php

    // Исполнение простого запроса
    $cars = $this->modelsManager->executeQuery("SELECT * FROM Cars");

    // Со связыванием (bound) параметров
    $cars = $this->modelsManager->executeQuery("SELECT * FROM Cars WHERE name = :name:", array(
        'name' => 'Audi'
    ));

