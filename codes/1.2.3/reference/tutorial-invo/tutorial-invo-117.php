<?php

$app = new \Phalcon\Mvc\Application($di);

echo $app->handle()->getContent();

