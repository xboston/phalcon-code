<?php

// Сессии запустятся один раз, при первом обращении к объекту
$di->setShared('session', function() {
    $session = new Phalcon\Session\Adapter\Files();
    $session->start();
    return $session;
});

