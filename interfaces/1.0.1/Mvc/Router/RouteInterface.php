<?php
namespace Phalcon\Mvc\Router{
    interface RouteInterface
    {
        public function __construct($pattern, $paths = NULL, $httpMethods = NULL);
        public function compilePattern($pattern);
        public function via($httpMethods);
        public function reConfigure($pattern, $paths = NULL);
        public function getName();
        public function setName($name);
        public function setHttpMethods($httpMethods);
        public function getRouteId();
        public function getPattern();
        public function getCompiledPattern();
        public function getPaths();
        public function getHttpMethods();
        public static function reset();
    }
}