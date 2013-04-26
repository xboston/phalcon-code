<?php
namespace Phalcon\Assets{

    abstract class Collection implements \Countable,\Iterator,\Traversable
    {
        public function add($resource){}
        public function addCss($path, $local = NULL){}
        public function addJs($path, $local = NULL){}
        public function getResources(){}
        public function count(){}
        public function rewind(){}
        public function current(){}
        public function key(){}
        public function next(){}
        public function valid(){}
        public function setPrefix($prefix){}
        public function getPrefix(){}
        public function setLocal($local){}
        public function getLocal(){}
    }
}