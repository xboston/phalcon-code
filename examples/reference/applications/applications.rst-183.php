
    <?php

    $di = new \Phalcon\DI\FactoryDefault();

    // Специфичные роуты для модуля
    $di->set('router', function () {

        $router = new \Phalcon\Mvc\Router();

        $router->setDefaultModule("frontend");

        $router->add(
            "/login",
            array(
                'module'     => 'backend',
                'controller' => 'login',
                'action'     => 'index',
            )
        );

        $router->add(
            "/admin/products/:action",
            array(
                'module'     => 'backend',
                'controller' => 'products',
                'action'     => 1,
            )
        );

        $router->add(
            "/products/:action",
            array(
                'controller' => 'products',
                'action'     => 1,
            )
        );

        return $router;

    });

    try {

        // Создание приложения
        $application = new \Phalcon\Mvc\Application();
        $application->setDI($di);

        // Регистрация установленных модулей
        $application->registerModules(
            array(
                'frontend' => array(
                    'className' => 'Multiple\Frontend\Module',
                    'path'      => '../apps/frontend/Module.php',
                ),
                'backend'  => array(
                    'className' => 'Multiple\Backend\Module',
                    'path'      => '../apps/backend/Module.php',
                )
            )
        );

        // Обработка запроса
        echo $application->handle()->getContent();

    } catch(Phalcon\Exception $e){
        echo $e->getMessage();
    }

