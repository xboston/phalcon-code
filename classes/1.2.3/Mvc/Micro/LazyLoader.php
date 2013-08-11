<?php
namespace Phalcon\Mvc\Micro{

    abstract class LazyLoader
    {
        public function __construct($definition){}
        public function __call($method, $arguments){}
    }
}