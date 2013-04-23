
    <?php

    // Кэшируем данные на 2 дня
    $frontCache = new Phalcon\Cache\Frontend\Data(array(
        "lifetime" => 172800
    ));

    // Создаем компонент, который будем кэшировать из "Выходных данных" в "Файл"
    // Устанавливаем папку для кэшируемых файлов - важно сохранить символ "/" в конце пути
    $cache = new Phalcon\Cache\Backend\File($frontCache, array(
        "cacheDir" => "../app/cache/"
    ));

    // Пробуем получить закэшированные записи
    $cacheKey = 'robots_order_id.cache';
    $robots    = $cache->get($cacheKey);
    if ($robots === null) {

        // $robots может иметь значение NULL из-за того, что истекла годность хранения или данных просто не существует
        // Получим данные из БД
        $robots = Robots::find(array("order" => "id"));

        // Сохраняем их в кэше
        $cache->save($cacheKey, $robots);
    }

    // Используем $robots :)
    foreach ($robots as $robot) {
       echo $robot->name, "\n";
    }

