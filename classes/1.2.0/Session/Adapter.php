<?php
namespace Phalcon\Session{

    abstract class Adapter
    {
        public function __construct($options = NULL){}
        public function start(){}
        public function setOptions($options){}
        public function getOptions(){}
        public function get($index, $defaultValue = NULL){}
        public function set($index, $value){}
        public function has($index){}
        public function remove($index){}
        public function getId(){}
        public function isStarted(){}
        public function destroy(){}
    }
}