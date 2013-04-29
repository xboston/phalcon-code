<?php

// Название действия разрешает использование "-": /products/new-ipod-nano-4-generation
$router
    ->add('/products/{slug:[a-z\-]+}', array(
        'controller' => 'products',
        'action' => 'show'
    ))
    ->convert('slug', function($slug) {
        // Удаляем тире из выбранного параметра
        return str_replace('-', '', $slug);
    });

