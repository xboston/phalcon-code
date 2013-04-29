<?php

$scripts = $assets
    ->collection('header')
    ->setPrefix('http:://cdn.example.com/')
    ->setLocal(false)
    ->addJs('js/jquery.js')
    ->addJs('js/bootstrap.min.js');

