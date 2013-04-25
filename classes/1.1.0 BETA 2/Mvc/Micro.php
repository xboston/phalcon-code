<?php
namespace Phalcon\Mvc{
    class Micro extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface,\ArrayAccess
    {
        public function setDI($dependencyInjector){}
        public function map($routePattern, $handler){}
        public function get($routePattern, $handler){}
        public function post($routePattern, $handler){}
        public function put($routePattern, $handler){}
        public function patch($routePattern, $handler){}
        public function head($routePattern, $handler){}
        public function delete($routePattern, $handler){}
        public function options($routePattern, $handler){}
        public function mount($collection){}
        public function notFound($handler){}
        public function getRouter(){}
        public function setService($serviceName, $definition, $shared = NULL){}
        public function hasService($serviceName){}
        public function getService($serviceName){}
        public function getSharedService($serviceName){}
        public function handle($uri = NULL){}
        public function setActiveHandler($activeHandler){}
        public function getActiveHandler(){}
        public function getReturnedValue(){}
        public function offsetExists($alias){}
        public function offsetSet($alias, $definition){}
        public function offsetGet($alias){}
        public function offsetUnset($alias){}
        public function before($handler){}
        public function after($handler){}
        public function finish($handler){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}