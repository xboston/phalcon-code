<?php
namespace Phalcon\Mvc\Model{

    abstract class Resultset implements \Phalcon\Mvc\Model\ResultsetInterface,\Iterator,\Traversable,\SeekableIterator,\Countable,\ArrayAccess,\Serializable
    {
        const TYPE_RESULT_FULL = 0;
        const TYPE_RESULT_PARTIAL = 1;
        const HYDRATE_RECORDS = 0;
        const HYDRATE_OBJECTS = 2;
        const HYDRATE_ARRAYS = 1;
        public function next(){}
        public function key(){}
        public function rewind(){}
        public function seek($position){}
        public function count(){}
        public function offsetExists($index){}
        public function offsetGet($index){}
        public function offsetSet($index, $value){}
        public function offsetUnset($offset){}
        public function getType(){}
        public function getFirst(){}
        public function getLast(){}
        public function setIsFresh($isFresh){}
        public function isFresh(){}
        public function setHydrateMode($hydrateMode){}
        public function getHydrateMode(){}
        public function getCache(){}
        public function current(){}
        public function getMessages(){}
        public function delete($conditionCallback = NULL){}
        public function filter($filter){}
        public function toArray(){}
        public function valid(){}
        public function serialize(){}
        public function unserialize($serialized){}
    }
}