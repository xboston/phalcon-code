<?php

$di->set('view', function() {

    $view = new Phalcon\Mvc\View\Simple();

    $view->setViewsDir('../app/views/');

    return $view;

}, true);

