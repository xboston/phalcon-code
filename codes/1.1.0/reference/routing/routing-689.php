<?php

$router->add('/login', array(
    'module' => 'admin',
    'controller' => 'session'
))->beforeMatch(array(new AjaxFilter(), 'check'));

