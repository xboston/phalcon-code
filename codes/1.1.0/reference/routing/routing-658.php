<?php

$router->add('/login', array(
    'module' => 'admin',
    'controller' => 'session'
))->beforeMatch(function($uri, $route) {
    //Check if the request was made with Ajax
    if ($_SERVER['X_REQUESTED_WITH'] == 'xmlhttprequest') {
        return false;
    }
    return true;
});

