<?php
namespace Phalcon\Config\Adapter{

    abstract class Ini extends \Phalcon\Config implements \Countable,\ArrayAccess
    {
        public function __construct($filePath){}
        public function offsetExists($index){}
        public function get($index, $defaultValue = NULL){}
        public function offsetGet($index){}
        public function offsetSet($index, $value){}
        public function offsetUnset($index){}
        public function merge($config){}
        public function toArray(){}
        public function count(){}
        public function __wakeup(){}
        public static function __set_state($data){}
        public function __get($index){}
        public function __set($index, $value){}
        public function __isset($index){}
    }
}