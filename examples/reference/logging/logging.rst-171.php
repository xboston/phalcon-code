
    <?php

    // Basic Usage
    $logger = new \Phalcon\Logger\Adapter\Syslog(null);

    // Setting ident/mode/facility
    $logger = new \Phalcon\Logger\Adapter\Syslog("ident-name", array(
        'option' => LOG_NDELAY,
        'facility' => LOG_MAIL
    ));

