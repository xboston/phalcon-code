<?php
namespace Phalcon\Mvc\Model{

    abstract class Message implements \Phalcon\Mvc\Model\MessageInterface
    {
        public function __construct($message, $field = NULL, $type = NULL, $model = NULL){}
        public function setType($type){}
        public function getType(){}
        public function setMessage($message){}
        public function getMessage(){}
        public function setField($field){}
        public function getField(){}
        public function setModel($model){}
        public function getModel(){}
        public function __toString(){}
        public static function __set_state($message){}
    }
}