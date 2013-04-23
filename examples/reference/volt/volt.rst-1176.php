
    <?php

    // Создание компилятора
    $compiler = new \Phalcon\Mvc\View\Engine\Volt\Compiler();

    // Добавление каких-то опций
    $compiler->setOptions(array(
        //...
    ));

    // Компиляция шаблона-строки, возвращающая PHP-код
    echo $compiler->compileString('{{ "hello" }}');

    // Компиляция шаблона-файла в определённый файл
    $compiler->compileFile('layouts/main.volt', 'cache/layouts/main.volt.php');

    // Компиляция шаблона-файла, в файл, определённый в настройках, переданных в компилятор
    $compiler->compile('layouts/main.volt');

    // Запрос собранных шаблонов (по желанию)
    require $compiler->getCompiledPath();

