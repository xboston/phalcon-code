<?php
namespace Phalcon\Cache{

    interface BackendInterface
    {
        public function start($keyName, $lifetime = NULL);
        public function stop($stopBuffer = NULL);
        public function getFrontend();
        public function getOptions();
        public function isFresh();
        public function isStarted();
        public function setLastKey($lastKey);
        public function getLastKey();
        public function get($keyName, $lifetime = NULL);
        public function save($keyName = NULL, $content = NULL, $lifetime = NULL, $stopBuffer = NULL);
        public function delete($keyName);
        public function queryKeys($prefix = NULL);
        public function exists($keyName = NULL, $lifetime = NULL);
    }
}