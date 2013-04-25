<?php
namespace Phalcon\Annotations\Adapter;
abstract class Apc implements \Phalcon\Annotations\AdapterInterface
{
    public function read($key){}
    public function write($key, $data){}
    public function setReader($reader){}
    public function getReader(){}
    public function get($className){}
    public function getMethods($className){}
    public function getMethod($className, $methodName){}
    public function getProperties($className){}
    public function getProperty($className, $propertyName){}
}