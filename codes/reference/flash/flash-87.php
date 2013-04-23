<?php

// Регистрируем компонент сообщений с CSS классами
$di->set('flash', function(){
    $flash = new \Phalcon\Flash\Direct(array(
        'error' => 'alert alert-error',
        'success' => 'alert alert-success',
        'notice' => 'alert alert-info',
    ));
    return $flash;
});

