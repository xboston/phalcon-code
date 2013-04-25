<?php
namespace Phalcon{
    class Loader implements \Phalcon\Events\EventsAwareInterface
    {
        public function __construct(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function setExtensions($extensions){}
        public function getExtensions(){}
        public function registerNamespaces($namespaces, $merge = NULL){}
        public function getNamespaces(){}
        public function registerPrefixes($prefixes, $merge = NULL){}
        public function getPrefixes(){}
        public function registerDirs($directories, $merge = NULL){}
        public function getDirs(){}
        public function registerClasses($classes, $merge = NULL){}
        public function getClasses(){}
        public function register(){}
        public function unregister(){}
        public function autoLoad($className){}
        public function getFoundPath(){}
        public function getCheckedPath(){}
    }
}