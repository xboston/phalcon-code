<?php
namespace Phalcon\Logger{

    abstract class Adapter
    {
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