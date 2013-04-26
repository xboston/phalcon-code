<?php

//Changing the logger format
$formatter = new Phalcon\Logger\Formatter\Line("%date% - %message%");
$logger->setFormatter($formatter);

