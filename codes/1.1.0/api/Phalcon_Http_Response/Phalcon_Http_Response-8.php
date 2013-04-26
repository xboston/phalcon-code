<?php

$response = new Phalcon\Http\Response();
$response->setStatusCode(200, "OK");
$response->setContent("<html><body>Hello</body></html>");
$response->send();



