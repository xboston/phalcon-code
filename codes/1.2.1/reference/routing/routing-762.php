<?php

$router->add('/login', array(
    'module' => 'admin',
    'controller' => 'session',
    'action' => 'login'
))->setHostName('([a-z+]).company.com');

