<?php
namespace Phalcon{

    abstract class Config implements \ArrayAccess,\Countable
    {
        public function __construct($arrayConfig = NULL){}
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