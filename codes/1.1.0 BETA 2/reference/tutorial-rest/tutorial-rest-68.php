<?php

$app = new Phalcon\Mvc\Micro();

// Получение списка всех роботов
$app->get('/api/robots', function() {

});

// Поиск роботов с $name в названии
$app->get('/api/robots/search/{name}', function($name) {

});

// Получение робота по указанному ключу
$app->get('/api/robots/{id:[0-9]+}', function($id) {

});

// Добавление нового робота
$app->post('/api/robots', function() {

});

// Обновление робота по ключу
$app->put('/api/robots/{id:[0-9]+}', function() {

});

// Удаление робота по ключу
$app->delete('/api/robots/{id:[0-9]+}', function() {

});

$app->handle();

