<?php
namespace Phalcon\Mvc\Model{

    abstract class ValidationFailed extends \Phalcon\Mvc\Model\Exception
    {
        public function __construct($model, $validationMessages){}
        public function getMessages(){}
        public function getModel(){}
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