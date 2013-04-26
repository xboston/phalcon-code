<?php

// Create the file logger in 'w' mode
$logger = new \Phalcon\Logger\Adapter\File("app/logs/test.log", array(
    'mode' => 'w'
));

