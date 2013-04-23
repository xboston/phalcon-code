<?php

$di->set('view', function() {

    // Создание обработчика событий
    $eventsManager = new Phalcon\Events\Manager();

    // Назначение слушателя для событий типа "view"
    $eventsManager->attach("view", function($event, $view) {
        echo $event->getType(), ' - ', $view->getActiveRenderPath(), PHP_EOL;
    });

    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir("../app/views/");

    // Назначение обработчика событий для компонента представления
    $view->setEventsManager($eventManagers);

    return $view;

}, true);

