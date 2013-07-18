<?php

use Phalcon\Logger , Phalcon\Logger\Multiple as MultipleStream , Phalcon\Logger\Adapter\File as FileAdapter , Phalcon\Logger\Adapter\Stream as StreamAdapter;

$logger = new MultipleStream();

$logger->push(new FileAdapter('test.log'));
$logger->push(new StreamAdapter('php://stdout'));

$logger->log("This is a message");
$logger->log("This is an error" , Logger::ERROR);
$logger->error("This is another error");

