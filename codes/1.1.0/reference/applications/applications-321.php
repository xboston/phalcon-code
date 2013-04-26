<?php

// Запускаем  сервис из контернейра сервисов
$router = $di->get('router');
$router->handle();

$view = $di->getShared('view');

$dispatcher = $di->get('dispatcher');

// Передаём обработанные параметры моршрутизатора в диспетчер
$dispatcher->setControllerName($router->getControllerName());
$dispatcher->setActionName($router->getActionName());
$dispatcher->setParams($router->getParams());

// Запускаем представление
$view->start();

// Выполняем запрос
$dispatcher->dispatch();

// Выводим необходимое представление
$view->render(
    $dispatcher->getControllerName(),
    $dispatcher->getActionName(),
    $dispatcher->getParams()
);

// Завершаем работу представления
$view->finish();

$response = $di->get('response');

// Передаём результат для ответа
$response->setContent($view->getContent());

// Отправляем заголовки
$response->sendHeaders();

// Выводим ответ
echo $response->getContent();

