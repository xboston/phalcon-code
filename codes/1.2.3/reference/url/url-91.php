<?php

$url = new Phalcon\Mvc\Url();

//Pass the URI in $_GET["_url"]
$url->setBaseUri('/invo/index.php?_url=/');

//This produce: /invo/index.php?_url=/products/save
echo $url->get("products/save");

