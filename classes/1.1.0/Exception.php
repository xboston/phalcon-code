<?php
namespace Phalcon{

    abstract class Exception extends \Exception
    {
        protected function __clone(){}
        public function __construct($message = NULL, $code = NULL, $previous = NULL){}
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