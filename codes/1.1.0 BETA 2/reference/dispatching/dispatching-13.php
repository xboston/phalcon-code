<?php

// Цикл диспетчера
while (!$finished) {

    $finished = true;

    $controllerClass = $controllerName."Controller";

    // Создание экземпляра класса контроллера, работает автопогрузчика
    $controller = new $controllerClass();

    // Выполнение действия
    call_user_func_array(array($controller, $actionName . "Action"), $params);

    // Значение переменной должно быть изменено при необходимости запуска другого контроллера
    // $finished = false;

}

