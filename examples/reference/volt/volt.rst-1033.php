
    <?php

    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

    $compiler = $volt->getCompiler();

    // Тут к функции 'shuffle' в Volt привязывается PHP-функция 'str_shuffle'
    $compiler->addFunction('shuffle', 'str_shuffle');

