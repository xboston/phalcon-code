<?php

$logger = new \Phalcon\Logger\Multiple();

$logger->push(new \Phalcon\Logger\Adapter\File('test.log'));
$logger->push(new \Phalcon\Logger\Adapter\Stream('php://stdout'));

$logger->log("This is a message");
$logger->log("This is an error", \Phalcon\Logger::ERROR);
$logger->error("This is another error");

