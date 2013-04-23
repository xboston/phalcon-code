
    <?php

    // Создание загрузчика
    $loader = new \Phalcon\Loader();

    // Регистрация классов
    $loader->registerClasses(
        array(
            "Some"         => "library/OtherComponent/Other/Some.php",
            "Example\Base" => "vendor/example/adapters/Example/BaseClass.php",
        )
    );

    // Регистрация автозагрузчика
    $loader->register();

		// Искомый класс будет искаться на соответсвующее зарегистрированное значение массива
    // например library/OtherComponent/Other/Some.php
    $some = new Some();

