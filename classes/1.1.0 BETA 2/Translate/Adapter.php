<?php
namespace Phalcon\Translate{
    class Adapter implements \ArrayAccess
    {
        public function _($translateKey, $placeholders = NULL){}
        public function offsetSet($offset, $value){}
        public function offsetExists($translateKey){}
        public function offsetUnset($offset){}
        public function offsetGet($translateKey){}
    }
}