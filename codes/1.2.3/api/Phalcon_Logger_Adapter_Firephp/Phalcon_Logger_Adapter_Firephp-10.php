<?php

$logger = new \Phalcon\Logger\Adapter\Firephp("");
$logger->log("This is a message");
$logger->log("This is an error", \Phalcon\Logger::ERROR);
$logger->error("This is another error");



