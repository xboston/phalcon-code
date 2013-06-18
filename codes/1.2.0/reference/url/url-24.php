<?php

$url = new Phalcon\Mvc\Url();

//Setting a relative base URI
$url->setBaseUri('/invo/');

//Setting a full domain as base URI
$url->setBaseUri('//my.domain.com/');

//Setting a full domain as base URI
$url->setBaseUri('http://my.domain.com/my-app/');

