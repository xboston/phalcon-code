<?php

$url = new Phalcon\Mvc\Url();

//Dynamic URIs are
$url->setBaseUri('/');

//Static resources go through a CDN
$url->setStaticBaseUri('http://static.mywebsite.com/');

