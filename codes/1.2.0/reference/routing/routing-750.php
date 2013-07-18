<?php

$router->add(
    '/login' ,
    array(
         'module'     => 'admin' ,
         'controller' => 'session' ,
         'action'     => 'login'
    )
)->setHostName('admin.company.com');

