<?php

$compiler->addFunction(
    'widget' ,
    function ($resolvedArgs , $exprArgs) {
        return 'MyLibrary\Widgets::get(' . $resolvedArgs . ')';
    }
);

