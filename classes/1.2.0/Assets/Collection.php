<?php
namespace Phalcon\Assets{

    abstract class Collection implements \Countable,\Iterator,\Traversable
    {
        public function add($resource){}
        public function addCss($path, $local = NULL, $filter = NULL, $attributes = NULL){}
        public function addJs($path, $local = NULL, $filter = NULL, $attributes = NULL){}
        public function getResources(){}
        public function count(){}
        public function rewind(){}
        public function current(){}
        public function key(){}
        public function next(){}
        public function valid(){}
        public function setTargetPath($targetPath){}
        public function getTargetPath(){}
        public function setSourcePath($sourcePath){}
        public function getSourcePath(){}
        public function setTargetUri($targetUri){}
        public function getTargetUri(){}
        public function setPrefix($prefix){}
        public function getPrefix(){}
        public function setLocal($local){}
        public function getLocal(){}
        public function setAttributes($attributes){}
        public function getAttributes(){}
        public function addFilter($filter){}
        public function setFilters($filters){}
        public function getFilters(){}
        public function join($join){}
        public function getJoin(){}
        public function getRealTargetPath($basePath = NULL){}
    }
}