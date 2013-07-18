<?php

use Phalcon\Mvc\View;

$di->set(
    'view' ,
    function () {

        $view = new View();

        //Disable several levels
        $view->disableLevel(
            array(
                 View::LEVEL_LAYOUT      => true ,
                 View::LEVEL_MAIN_LAYOUT => true
            )
        );

        return $view;

    } ,
    true
);

