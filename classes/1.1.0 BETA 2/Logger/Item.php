<?php
namespace Phalcon\Logger{

    abstract class Item
    {
        public function __construct($message, $type, $time = NULL){}
        public function getMessage(){}
        public function getType(){}
        public function getTime(){}
    }
}