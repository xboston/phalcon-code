<?php
namespace Phalcon\Assets\Resource{

    abstract class Js extends \Phalcon\Assets\Resource
    {
        public function __construct($path, $local = NULL, $filter = NULL, $attributes = NULL){}
        public function setType($type){}
        public function getType(){}
        public function setPath($path){}
        public function getPath(){}
        public function setLocal($local){}
        public function getLocal(){}
        public function setFilter($filter){}
        public function getFilter(){}
        public function setAttributes($attributes){}
        public function getAttributes(){}
        public function setTargetUri($targetUri){}
        public function getTargetUri(){}
        public function setSourcePath($sourcePath){}
        public function getSourcePath(){}
        public function setTargetPath($targetPath){}
        public function getTargetPath(){}
        public function getContent($basePath = NULL){}
        public function getRealTargetUri(){}
        public function getRealSourcePath($basePath = NULL){}
        public function getRealTargetPath($basePath = NULL){}
    }
}