<?php

// Текущая страница
// В контроллерах можно использовать:
// $this->request->getQuery('page', 'int'); // GET
// $this->request->getPost('page', 'int'); // POST
$currentPage = (int) $_GET["page"];

// Набор данных для разбивки на страницы
$robots = Robots::find();

// Создаём пагинатор, отображаются 10 элементов на странице, начиная с текущей - $currentPage
$paginator = new \Phalcon\Paginator\Adapter\Model(
    array(
        "data" => $robots,
        "limit"=> 10,
        "page" => $currentPage
    )
);

// Получение результатов работы ппагинатора
$page = $paginator->getPaginate();

