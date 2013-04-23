<?php

$di->set('security', function(){

    $security = new Phalcon\Security();

    //Устанавливаем фактор хеширования в 12 раундов
    $security->setWorkFactor(12);

    return $security;
}, true);

