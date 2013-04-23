<?php

// Создание frontend для выходных данных. Кэшируем файлы на 2 дня
$frontCache = new Phalcon\Cache\Frontend\Output(array(
    "lifetime" => 172800
));

// Создаем компонент, который будем кэшировать из "Выходных данных" в "Файл"
// Устанавливаем папку для кэшируемых файлов - важно указать символ "/" в конце пути
$cache = new Phalcon\Cache\Backend\File($frontCache, array(
    "cacheDir" => "../app/cache/"
));

// Получить/Создать кэшируемый файл ../app/cache/my-cache.html
$content = $cache->start("my-cache.html");

// Если $content является значением NULL, значит данных в кэше нет и их надо сгенерировать
if ($content === null) {

    // Выводим дату и время
    echo date("r");

    // Генерируем ссылку на "регистрацию"
    echo Phalcon\Tag::linkTo(
        array(
            "user/signup",
            "Sign Up",
            "class" => "signup-button"
        )
    );

    // Сохраняем вывод в кэш
    $cache->save();

} else {

    // Ввыводим кэшируемые данные
    echo $content;
}

