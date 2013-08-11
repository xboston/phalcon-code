<?php
namespace Phalcon\Mvc\Router{

    abstract class Group
    {
        public function __construct($paths = NULL){}
        public function setHostname($hostname){}
        public function getHostname(){}
        public function setPrefix($prefix){}
        public function getPrefix(){}
        public function beforeMatch($beforeMatch){}
        public function getBeforeMatch(){}
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