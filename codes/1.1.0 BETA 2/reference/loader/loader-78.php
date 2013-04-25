<?php

// Создание загрузчика
$loader = new \Phalcon\Loader();

// Регистрация каталогов
$loader->registerDirs(
    array(
        "library/MyComponent/",
        "library/OtherComponent/Other/",
        "vendor/example/adapters/",
        "vendor/example/"
    )
);

// Регистрация автозагрузчика
$loader->register();

// Требуемый файл будет автоматически подключен из первого каталога в котором он будет найден
// например library/OtherComponent/Other/Some.php
$some = new Some();

