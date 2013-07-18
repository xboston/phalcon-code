<?php

//The action name allows dashes, an action can be: /products/new-ipod-nano-4-generation
$router->add(
        '/products/{slug:[a-z\-]+}' ,
        array(
             'controller' => 'products' ,
             'action'     => 'show'
        )
    )->convert(
        'slug' ,
        function ($slug) {
            //Transform the slug removing the dashes
            return str_replace('-' , '' , $slug);
        }
    );

