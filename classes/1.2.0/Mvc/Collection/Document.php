<?php
namespace Phalcon\Mvc\Collection{

    abstract class Document implements \ArrayAccess
    {
        public function offsetExists($index){}
        public function offsetGet($index){}
        public function offsetSet($index, $value){}
        public function offsetUnset($offset){}
        public function readAttribute($attribute){}
        public function writeAttribute($attribute, $value){}
    }
}