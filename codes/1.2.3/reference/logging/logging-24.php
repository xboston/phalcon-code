<?php

use Phalcon\Logger\Adapter\File as FileAdapter;

$logger = new FileAdapter("app/logs/test.log");
$logger->log("This is a message");
$logger->log("This is an error", \Phalcon\Logger::ERROR);
$logger->error("This is another error");

