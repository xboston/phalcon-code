<?php

$router = new \Phalcon\Mvc\Router();

// Создаётся группа с общим модулем и контроллером
$blog = new \Phalcon\Mvc\Router\Group(array(
    'module' => 'blog',
    'controller' => 'index'
));

// Маршруты начинаются с /blog
$blog->setPrefix('/blog');

// Добавление маршрута в группу
$blog->add('/save', array(
    'action' => 'save'
));

// Еще один маршрут
$blog->add('/edit/{id}', array(
    'action' => 'edit'
));

// Маршрут для действия по умолчанию
$blog->add('/blog', array(
    'controller' => 'about',
    'action' => 'index'
));

// Добавление группы в общие правила маршрутизации
$router->mount($blog);

