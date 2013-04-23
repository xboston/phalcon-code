
    <?php

    // Кэшируем данные на 1 час
    $frontCache = new Phalcon\Cache\Frontend\Data(array(
        "lifetime" => 3600
    ));

    // Создаем компонент, который будет кэшировать данные в Memcache
    // Настройки подключения к Memcache
    $cache = new Phalcon\Cache\Backend\Memcache($frontCache, array(
        "host" => "localhost",
        "port" => "11211"
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

