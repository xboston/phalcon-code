<?php
namespace Phalcon\Logger{

    interface AdapterInterface
    {
        public function setFormatter($formatter);
        public function getFormatter();
        public function setLogLevel($level);
        public function getLogLevel();
        public function log($message, $type = NULL);
        public function begin();
        public function commit();
        public function rollback();
        public function close();
        public function debug($message);
        public function error($message);
        public function info($message);
        public function notice($message);
        public function warning($message);
        public function alert($message);
    }
}