<?php
namespace Phalcon\Mvc\Model\Resultset;
interface Complex extends \Serializable,ArrayAccess,Countable,SeekableIterator,Traversable,Iterator,Phalcon\Mvc\Model\ResultsetInterface
{
    public function __construct($columnsTypes, $result, $cache = NULL);
    public function valid();
    public function toArray();
    public function serialize();
    public function unserialize($data);
    public function next();
    public function key();
    public function rewind();
    public function seek($position);
    public function count();
    public function offsetExists($index);
    public function offsetGet($index);
    public function offsetSet($index, $value);
    public function offsetUnset($offset);
    public function getType();
    public function getFirst();
    public function getLast();
    public function setIsFresh($isFresh);
    public function isFresh();
    public function setHydrateMode($hydrateMode);
    public function getHydrateMode();
    public function getCache();
    public function current();
    public function getMessages();
    public function delete($conditionCallback = NULL);
}