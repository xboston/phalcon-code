<?php

$router->setUriSource(Router::URI_SOURCE_GET_URL); // use $_GET['_url'] (default)
$router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI); // use $_SERVER['REQUEST_URI'] (default)

