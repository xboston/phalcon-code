<?php

use Phalcon\Logger\Adapter\Syslog as SyslogAdapter;

// Basic Usage
$logger = new SyslogAdapter(null);

// Setting ident/mode/facility
$logger = new SyslogAdapter("ident-name" , array(
                                                'option'   => LOG_NDELAY ,
                                                'facility' => LOG_MAIL
                                           ));

