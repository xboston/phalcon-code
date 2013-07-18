<?php

$scripts = $this->assets->collection('footer');

if ($config->enviroment == 'development') {
    $scripts->setPrefix('/');
} else {
    $scripts->setPrefix('http:://cdn.example.com/');
}

$scripts->addJs('js/jquery.js')
        ->addJs('js/bootstrap.min.js');

