<?php

$di->setShared('transactions', function(){
    return new \Phalcon\Mvc\Model\Transaction\Manager();
});

