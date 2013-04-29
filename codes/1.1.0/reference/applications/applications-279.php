<?php

//Creating a view component
$view = new \Phalcon\Mvc\View();

//Set options to view component
//...

// Register the installed modules
$application->registerModules(
    array(
        'frontend' => function($di) use ($view) {
            $di->setShared('view', function() use ($view) {
                $view->setViewsDir('../apps/frontend/views/');
                return $view;
            });
        },
        'backend' => function($di) use ($view) {
            $di->setShared('view', function() use ($view) {
                $view->setViewsDir('../apps/frontend/views/');
                return $view;
            });
        }
    )
);

