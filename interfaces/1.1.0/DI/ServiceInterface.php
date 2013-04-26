<?php
namespace Phalcon\DI{

    interface ServiceInterface
    {
        public function __construct($name, $definition, $shared = NULL);
        public function getName();
        public function setShared($shared);
        public function isShared();
        public function setDefinition($definition);
        public function getDefinition();
        public function resolve($parameters = NULL, $dependencyInjector = NULL);
        public static function __set_state($attributes);
    }
}