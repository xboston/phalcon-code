
    <?php

    // Создание маршрутизатора
    $router = new \Phalcon\Mvc\Router();

    // Тут устанавливаются правила маршрутизации
    // ...

    // Бдует использован $_GET["_url"]
    $router->handle();

    // Можно указать параметр самостоятельно
    $router->handle("/employees/edit/17");

    // Получаем выбранный контроллер
    echo $router->getControllerName();

    // .. и соответсвющее действие
    echo $router->getActionName();

    // Получаем сам выбранный для ссылки маршрут
    $route = $router->getMatchedRoute();

