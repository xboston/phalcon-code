<?php
namespace Phalcon\Session{

    abstract class Bag implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Session\BagInterface
    {
        public function __construct($name){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function initialize(){}
        public function destroy(){}
        public function set($property, $value){}
        public function __set($property, $value){}
        public function get($property, $defaultValue = NULL){}
        public function __get($property){}
        public function has($property){}
        public function __isset($property){}
        public function remove($property){}
        public function __unset($property){}
    }
}