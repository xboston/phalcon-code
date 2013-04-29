<?php

use Phalcon\Db\Profiler,
    Phalcon\Logger,
    Phalcon\Logger\Adapter\File;

class MyDbListener
{

    protected $_profiler;

    protected $_logger;

    /**
     * Creates the profiler and starts the logger
     */
    public function __construct()
    {
        $this->_profiler = new Profiler();
        $this->_logger = new Logger("../apps/logs/db.log");
    }

    /**
     * This executed if the event triggered is 'beforeQuery'
     */
    public function beforeQuery($event, $connection)
    {
        $this->_profiler->startProfile($connection->getSQLStatement());
    }

    /**
     * This executed if the event triggered is 'afterQuery'
     */
    public function afterQuery($event, $connection)
    {
        $this->_logger->log($connection->getSQLStatement(), Logger::INFO);
        $this->_profiler->stopProfile();
    }

    public function getProfiler()
    {
        return $this->_profiler;
    }

}

