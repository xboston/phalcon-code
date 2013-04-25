<?php

$application = new \Phalcon\Mvc\Application();
$application->setDI($di);
echo $application->handle()->getContent();

