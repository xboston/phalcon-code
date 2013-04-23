
    <?php

    class MyDbListener
    {

        protected $_profiler;

        protected $_logger;

        public function __construct()
        {
            $this->_profiler = new \Phalcon\Db\Profiler();
            $this->_logger = new \Phalcon\Logger\Adapter\File("../apps/logs/db.log");
        }

        public function beforeQuery($event, $connection)
        {
            $this->_profiler->startProfile($connection->getSQLStatement());
        }

        public function afterQuery($event, $connection)
        {
            $this->_logger->log($connection->getSQLStatement(), \Phalcon\Logger::INFO);
            $this->_profiler->stopProfile();
        }

        public function getProfiler()
        {
            return $this->_profiler;
        }

    }

