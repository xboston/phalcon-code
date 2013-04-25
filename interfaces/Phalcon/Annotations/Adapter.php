<?php
namespace Phalcon\Annotations;
abstract class Adapter
{
    public function setReader($reader){}
    public function getReader(){}
    public function get($className){}
    public function getMethods($className){}
    public function getMethod($className, $methodName){}
    public function getProperties($className){}
    public function getProperty($className, $propertyName){}
}