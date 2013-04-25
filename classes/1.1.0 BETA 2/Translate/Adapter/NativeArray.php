<?php
namespace Phalcon\Translate\Adapter{

    abstract class NativeArray extends \Phalcon\Translate\Adapter implements \ArrayAccess,\Phalcon\Translate\AdapterInterface
    {
        public function __construct($options){}
        public function query($index, $placeholders = NULL){}
        public function exists($index){}
        public function _($translateKey, $placeholders = NULL){}
        public function offsetSet($offset, $value){}
        public function offsetExists($translateKey){}
        public function offsetUnset($offset){}
        public function offsetGet($translateKey){}
    }
}