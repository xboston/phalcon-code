<?php
namespace Phalcon\Mvc\Model\Transaction{
    abstract class Failed
    {
        public function __construct($message, $record){}
        public function getRecordMessages(){}
        public function getRecord(){}
        protected function __clone(){}
        public function getMessage(){}
        public function getCode(){}
        public function getFile(){}
        public function getLine(){}
        public function getTrace(){}
        public function getPrevious(){}
        public function getTraceAsString(){}
        public function __toString(){}
    }
}