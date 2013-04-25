<?php
namespace Phalcon\Cache\Backend;
abstract class Apc implements \Phalcon\Cache\BackendInterface
{
    public function get($keyName, $lifetime = NULL){}
    public function save($keyName = NULL, $content = NULL, $lifetime = NULL, $stopBuffer = NULL){}
    public function delete($keyName){}
    public function queryKeys($prefix = NULL){}
    public function exists($keyName = NULL, $lifetime = NULL){}
    public function __construct($frontend, $options = NULL){}
    public function start($keyName, $lifetime = NULL){}
    public function stop($stopBuffer = NULL){}
    public function getFrontend(){}
    public function getOptions(){}
    public function isFresh(){}
    public function isStarted(){}
    public function setLastKey($lastKey){}
    public function getLastKey(){}
}