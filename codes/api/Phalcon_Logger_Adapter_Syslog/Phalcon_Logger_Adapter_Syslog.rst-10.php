
    <?php

    $logger = new \Phalcon\Logger\Adapter\Syslog("ident", array(
    	'option' => LOG_NDELAY,
    	'facility' => LOG_MAIL
    ));
    $logger->log("This is a message");
    $logger->log("This is an error", \Phalcon\Logger::ERROR);
    $logger->error("This is another error");



