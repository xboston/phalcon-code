<?php
namespace Phalcon\Translate;
interface Adapter extends \ArrayAccess
{
    public function _($translateKey, $placeholders = NULL);
    public function offsetSet($offset, $value);
    public function offsetExists($translateKey);
    public function offsetUnset($offset);
    public function offsetGet($traslateKey);
}