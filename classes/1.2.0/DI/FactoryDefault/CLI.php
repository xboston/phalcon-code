<?php
namespace Phalcon\DI\FactoryDefault{

    abstract class CLI extends \Phalcon\DI\FactoryDefault implements \Phalcon\DiInterface
    {
        public function __construct(){}
        public function set($name, $definition, $shared = NULL){}
        public function setShared($name, $definition){}
        public function remove($name){}
        public function attempt($name, $definition, $shared = NULL){}
        public function setRaw($name, $rawDefinition){}
        public function getRaw($name){}
        public function getService($name){}
        public function get($name, $parameters = NULL){}
        public function getShared($name, $parameters = NULL){}
        public function has($name){}
        public function wasFreshInstance(){}
        public function getServices(){}
        public function offsetExists($name){}
        public function offsetSet($name, $definition){}
        public function offsetGet($name){}
        public function offsetUnset($name){}
        public function __call($method, $arguments = NULL){}
        public static function setDefault($dependencyInjector){}
        public static function getDefault(){}
        public static function reset(){}
    }
}