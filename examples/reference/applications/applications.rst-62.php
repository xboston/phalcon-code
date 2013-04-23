
    <?php

    $loader = new \Phalcon\Loader();

    // Использование автозагрузки по префиксу пространства имён
    $loader->registerNamespaces(
        array(
            'Single\Controllers' => '../apps/controllers/',
            'Single\Models'      => '../apps/models/',
        )
    )->register();

    $di = new \Phalcon\DI\FactoryDefault();

    // Регистрация диспетчера пространства имён для контроллеров
    // Обратите внимание на двойной слеш в конце
    // параметра используемого в функции setDefaultNamespace
    $di->set('dispatcher', function() {
        $dispatcher = new \Phalcon\Mvc\Dispatcher();
        $dispatcher->setDefaultNamespace('Single\Controllers\\');
        return $dispatcher;
    });

    // Регистрация компонента представлений
    $di->set('view', function() {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../apps/views/');
        return $view;
    });

    try {
        $application = new \Phalcon\Mvc\Application();
        $application->setDI($di);
        echo $application->handle()->getContent();
    } catch(Phalcon\Exception $e){
        echo $e->getMessage();
    }


