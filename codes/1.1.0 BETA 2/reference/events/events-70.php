<?php

class MyDbListener
{

    protected $_logger;

    public function __construct()
    {
        $this->_logger = new \Phalcon\Logger\Adapter\File("../apps/logs/db.log");
    }

    public function afterQuery($event, $connection)
    {
        $this->_logger->log($connection->getSQLStatement(), \Phalcon\Logger::INFO);
    }

}

