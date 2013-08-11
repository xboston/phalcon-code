<?php

use Phalcon\Logger\Adapter\File as Logger;

class MyDbListener
{

    protected $_logger;

    public function __construct()
    {
        $this->_logger = new Logger("../apps/logs/db.log");
    }

    public function afterQuery($event, $connection)
    {
        $this->_logger->log($connection->getSQLStatement(), \Phalcon\Logger::INFO);
    }

}

