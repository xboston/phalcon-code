<?php

$application = new \Phalcon\Mvc\Application($di);

echo $application->handle()->getContent();

