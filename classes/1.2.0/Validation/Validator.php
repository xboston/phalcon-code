<?php
namespace Phalcon\Validation{

    abstract class Validator
    {
        public function __construct($options = NULL){}
        public function isSetOption($key){}
        public function getOption($key){}
        public function setOption($key, $value){}
    }
}