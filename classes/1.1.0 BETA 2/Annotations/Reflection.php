<?php
namespace Phalcon\Annotations{

    abstract class Reflection
    {
        public function __construct($reflectionData = NULL){}
        public function getClassAnnotations(){}
        public function getMethodsAnnotations(){}
        public function getPropertiesAnnotations(){}
        public function getReflectionData(){}
        public static function __set_state($data){}
    }
}