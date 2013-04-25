<?php

// Регистрация Volt в качестве шаблонизатора с анонимной функцией
$di->set('view', function() {

    $view = new \Phalcon\Mvc\View();

    $view->setViewsDir('../app/views/');

    $view->registerEngines(array(
        ".volt" => function($view, $di) {
            $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

            // тут установка каких-то настроек

            return $volt;
        }
    ));

    return $view;
});

