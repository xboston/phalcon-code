<?php

// Маршруты для проверки
$testRoutes = array(
    '/',
    '/index',
    '/index/index',
    '/index/test',
    '/products',
    '/products/index/',
    '/products/show/101',
);

$router = new Phalcon\Mvc\Router();

// Тут необходимо установить правила маршрутизации
//...

// Цикл проверки маршрутов
foreach ($testRoutes as $testRoute) {

    // Обработка маршрута
    $router->handle($testRoute);

    echo 'Тестирование ', $testRoute, '<br>';

    // Проверка выбранного маршрута
    if ($router->wasMatched()) {
        echo 'Контроллер (Controller): ', $router->getControllerName(), '<br>';
        echo 'Действие (Action): ', $router->getActionName(), '<br>';
    } else {
        echo 'Маршрут не поддерживается<br>';
    }
    echo '<br>';

}

