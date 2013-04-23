
    <?php

    // Opens a stream using zlib compression
    $logger = new \Phalcon\Logger\Adapter\Stream("compress.zlib://week.log.gz");

    // Writes the logs to stderr
    $logger = new \Phalcon\Logger\Adapter\Stream("php://stderr");

