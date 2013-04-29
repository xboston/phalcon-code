<?php

use Phalcon\Logger\Adapter\File as FileAdapter;

// Create the file logger in 'w' mode
$logger = new FileAdapter("app/logs/test.log", array(
    'mode' => 'w'
));

