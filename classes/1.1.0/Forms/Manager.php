<?php
namespace Phalcon\Forms{

    abstract class Manager
    {
        public function create($name = NULL, $entity = NULL){}
        public function get($name){}
        public function has($name){}
        public function set($name, $form){}
    }
}