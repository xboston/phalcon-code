<?php

// Получение данных из третьего параметра
$eventManager->attach('my-component', function($event, $component, $data) {
    print_r($data);
});

// Получение данных из контекста события
$eventManager->attach('my-component', function($event, $component) {
    print_r($event->getData());
});

