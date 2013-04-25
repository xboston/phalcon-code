<?php
namespace Phalcon\Mvc\Router{
    abstract class Route implements \Phalcon\Mvc\Router\RouteInterface
    {
        public function __construct($pattern, $paths = NULL, $httpMethods = NULL){}
        public function compilePattern($pattern){}
        public function via($httpMethods){}
        public function reConfigure($pattern, $paths = NULL){}
        public function getName(){}
        public function setName($name){}
        public function setHttpMethods($httpMethods){}
        public function getRouteId(){}
        public function getPattern(){}
        public function getCompiledPattern(){}
        public function getPaths(){}
        public function getReversedPaths(){}
        public function getHttpMethods(){}
        public function convert($name, $converter){}
        public function getConverters(){}
        public static function reset(){}
    }
}