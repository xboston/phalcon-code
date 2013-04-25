<?php

// Создание компонента представлений
$view = new \Phalcon\Mvc\View();

// Регистрация установленых модулей
$application->registerModules(
    array(
        'frontend' => function($di) use ($view) {
            $di->setShared('view', function() use ($view) {
                $view->setViewsDir('../apps/frontend/views/');
                return $view;
            });
        },
        'backend' => function($di) use ($view) {
            $di->setShared('view', function() use ($view) {
                $view->setViewsDir('../apps/frontend/views/');
                return $view;
            });
        }
    )
);

