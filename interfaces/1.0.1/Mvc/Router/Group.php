<?php
namespace Phalcon\Mvc\Router{
    class Group
    {
        public function __construct($paths = NULL){}
        public function setPrefix($prefix){}
        public function getPrefix(){}
        public function setPaths($paths){}
        public function getPaths(){}
        public function getRoutes(){}
        protected function _addRoute(){}
        public function add($pattern, $paths = NULL, $httpMethods = NULL){}
        public function addGet($pattern, $paths = NULL){}
        public function addPost($pattern, $paths = NULL){}
        public function addPut($pattern, $paths = NULL){}
        public function addPatch($pattern, $paths = NULL){}
        public function addDelete($pattern, $paths = NULL){}
        public function addOptions($pattern, $paths = NULL){}
        public function addHead($pattern, $paths = NULL){}
        public function clear(){}
    }
}