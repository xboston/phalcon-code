<?php
namespace Phalcon\Mvc;
abstract class Url implements \Phalcon\Mvc\UrlInterface,\Phalcon\DI\InjectionAwareInterface
{
    public function setDI($dependencyInjector){}
    public function getDI(){}
    public function setBaseUri($baseUri){}
    public function getBaseUri(){}
    public function setBasePath($basePath){}
    public function getBasePath(){}
    public function get($uri = NULL){}
    public function path($path = NULL){}
}