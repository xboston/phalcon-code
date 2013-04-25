<?php
namespace Phalcon\Mvc\Model;
abstract class Row implements \ArrayAccess,\Phalcon\Mvc\Model\ResultInterface
{
    public function setDirtyState($dirtyState){}
    public function offsetExists($index){}
    public function offsetGet($index){}
    public function offsetSet($index, $value){}
    public function offsetUnset($offset){}
}