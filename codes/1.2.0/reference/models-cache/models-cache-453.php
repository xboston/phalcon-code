<?php

$di->setShared(
    'modelsManager' ,
    function () {
        return new CustomModelsManager();
    }
);

