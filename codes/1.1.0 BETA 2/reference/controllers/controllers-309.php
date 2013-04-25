<?php

// Регистрация контроллера как сервиса
$di->set('IndexController', function() {
    $component = new Component();
    return $component;
});

