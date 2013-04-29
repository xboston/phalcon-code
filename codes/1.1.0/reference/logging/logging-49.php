<?php

use Phalcon\Logger\Adapter\File as FileAdapter;

// Create the logger
$logger = new FileAdapter("app/logs/test.log");

// Start a transaction
$logger->begin();

// Add messages
$logger->alert("This is an alert");
$logger->error("This is another error");

// Commit messages to file
$logger->commit();

