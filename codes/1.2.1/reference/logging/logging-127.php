<?php

use Phalcon\Logger\Formatter\Line as LineFormatter;

//Changing the logger format
$formatter = new LineFormatter("%date% - %message%");
$logger->setFormatter($formatter);

