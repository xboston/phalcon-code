<?php
namespace Phalcon{

    interface DiInterface extends \ArrayAccess
    {
        public function set($name, $definition, $shared = NULL);
        public function setShared($name, $definition);
        public function remove($name);
        public function attempt($name, $definition, $shared = NULL);
        public function get($name, $parameters = NULL);
        public function getShared($name, $parameters = NULL);
        public function setRaw($name, $rawDefinition);
        public function getRaw($name);
        public function getService($name);
        public function has($name);
        public function wasFreshInstance();
        public function getServices();
        public static function setDefault($dependencyInjector);
        public static function getDefault();
        public static function reset();
        public function offsetExists($offset);
        public function offsetGet($offset);
        public function offsetSet($offset, $value);
        public function offsetUnset($offset);
    }
}