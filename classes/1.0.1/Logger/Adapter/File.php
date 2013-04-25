<?php
namespace Phalcon\Logger\Adapter{
    class File extends \Phalcon\Logger\Adapter implements \Phalcon\Logger\AdapterInterface
    {
        public function __construct($name, $options = NULL){}
        public function getFormatter(){}
        public function logInternal($message, $type, $time){}
        public function close(){}
        public function __wakeup(){}
        public function setLogLevel($level){}
        public function getLogLevel(){}
        public function setFormatter($formatter){}
        public function begin(){}
        public function commit(){}
        public function rollback(){}
        public function emergence($message){}
        public function debug($message){}
        public function error($message){}
        public function info($message){}
        public function notice($message){}
        public function warning($message){}
        public function alert($message){}
        public function log($message, $type = NULL){}
    }
}