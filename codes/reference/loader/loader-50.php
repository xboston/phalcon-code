
    <?php

    // Создание загрузчика
    $loader = new \Phalcon\Loader();

    // Регистрация некоторых префиксов
    $loader->registerPrefixes(
        array(
           "Example_Base"    => "vendor/example/base/",
           "Example_Adapter" => "vendor/example/adapter/",
           "Example_"         => "vendor/example/",
        )
    );

    // Регистрация автозагрузчика
    $loader->register();

    // Требуемый файл будет искаться в vendor/example/adapter/Some.php
    $some = new Example_Adapter_Some();

