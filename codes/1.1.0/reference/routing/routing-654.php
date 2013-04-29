<?php

$router->setUriSource(Router::URI_SOURCE_GET_URL); // использование $_GET['_url'] (по умолчанию)
$router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI); // использование $_SERVER['REQUEST_URI'] (по умолчанию)

