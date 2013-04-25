<?php
namespace Phalcon\Mvc\Model{
    abstract class Validator
    {
        public function __construct($options){}
        protected function appendMessage(){}
        public function getMessages(){}
        protected function getOptions(){}
        protected function getOption(){}
        protected function isSetOption(){}
    }
}