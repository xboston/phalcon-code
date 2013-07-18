<?php

$router->add(
    '/get/info/{id}' ,
    array(
         'controller' => 'products' ,
         'action'     => 'info'
    )
)->beforeMatch(array( new AjaxFilter() , 'check' ));

