<?php
namespace Phalcon\Mvc\Micro{
    abstract class Collection
    {
        public function _addMap(){}
        public function get($routePattern, $handler){}
        public function post($routePattern, $handler){}
        public function put($routePattern, $handler){}
        public function patch($routePattern, $handler){}
        public function head($routePattern, $handler){}
        public function delete($routePattern, $handler){}
        public function options($routePattern, $handler){}
    }
}