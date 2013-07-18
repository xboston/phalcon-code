<?php

$url = new Phalcon\Mvc\Url();

//Pass the URI in $_GET["_url"]
$url->setBaseUri('/invo/index.php?_url=/');

//Pass the URI using $_SERVER["REQUEST_URI"]
$url->setBaseUri('/invo/index.php/');

