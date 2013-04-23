<?php

$di->set('dispatcher', function(){

    // Создание менеджера событий
    $eventsManager = new Phalcon\Events\Manager();

    // Прикрепление функции-слушателя для событий типа "dispatch"
    $eventsManager->attach("dispatch", function($event, $dispatcher) {
        //...
    });

    $dispatcher = new \Phalcon\Mvc\Dispatcher();

    // Связывание менеджера событий с диспетчером
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);

