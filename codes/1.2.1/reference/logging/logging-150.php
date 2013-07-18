<?php

use Phalcon\Logger\Adapter\Stream as StreamAdapter;

// Opens a stream using zlib compression
$logger = new StreamAdapter("compress.zlib://week.log.gz");

// Writes the logs to stderr
$logger = new StreamAdapter("php://stderr");

