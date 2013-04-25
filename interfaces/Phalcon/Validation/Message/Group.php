<?php
namespace Phalcon\Validation\Message{
    abstract class Group implements \Countable,\ArrayAccess,\Iterator,\Traversable
    {
        public function __construct($messages = NULL){}
        public function offsetGet($index){}
        public function offsetSet($index, $message){}
        public function offsetExists($index){}
        public function offsetUnset($index){}
        public function appendMessage($message){}
        public function appendMessages($messages){}
        public function count(){}
        public function rewind(){}
        public function current(){}
        public function key(){}
        public function next(){}
        public function valid(){}
        public static function __set_state($group){}
    }
}