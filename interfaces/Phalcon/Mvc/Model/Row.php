<?php
namespace Phalcon\Mvc\Model;
interface Row extends \ArrayAccess,Phalcon\Mvc\Model\ResultInterface
{
    public function setDirtyState($dirtyState);
    public function offsetExists($index);
    public function offsetGet($index);
    public function offsetSet($index, $value);
    public function offsetUnset($offset);
}