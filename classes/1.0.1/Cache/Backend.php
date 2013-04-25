<?php
namespace Phalcon\Cache{
    class Backend
    {
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
}