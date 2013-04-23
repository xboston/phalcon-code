<?php

// Изоляция данных сессий
$di->set('session', function(){

    // Все переменные этого приложения будет иметь преффикс "my-app-1"
    $session = new Phalcon\Session\Adapter\Files(
        array(
            'uniqueId' => 'my-app-1'
        )
    );

    $session->start();

    return $session;
});

