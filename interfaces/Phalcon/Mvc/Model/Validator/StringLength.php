<?php
namespace Phalcon\Mvc\Model\Validator{
    abstract class StringLength implements \Phalcon\Mvc\Model\ValidatorInterface
    {
        public function validate($record){}
        public function __construct($options){}
        protected function appendMessage(){}
        public function getMessages(){}
        protected function getOptions(){}
        protected function getOption(){}
        protected function isSetOption(){}
    }
}