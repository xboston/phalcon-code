
    <?php

    // Создание загрузчика
    $loader = new \Phalcon\Loader();

    // Регистрация пространств имён
    $loader->registerNamespaces(
        array(
           "Example\Base"    => "vendor/example/base/",
           "Example\Adapter" => "vendor/example/adapter/",
           "Example"         => "vendor/example/",
        )
    );

    // Регистрация автозагрузчика
    $loader->register();

    // Требуемый файл должен распологаться в vendor/example/adapter/Some.php
    $some = new Example\Adapter\Some();

