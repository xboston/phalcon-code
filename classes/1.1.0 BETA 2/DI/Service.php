<?php
namespace Phalcon\DI{

    abstract class Service implements \Phalcon\DI\ServiceInterface
    {
        public function __construct($name, $definition, $shared = NULL){}
        public function getName(){}
        public function setShared($shared){}
        public function isShared(){}
        public function setSharedInstance($sharedInstance){}
        public function setDefinition($definition){}
        public function getDefinition(){}
        public function resolve($parameters = NULL, $dependencyInjector = NULL){}
        public function setParameter($position, $parameter){}
        public function getParameter($position){}
        public static function __set_state($attributes){}
    }
}