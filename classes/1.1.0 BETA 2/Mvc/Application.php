<?php
namespace Phalcon\Mvc{
    class Application extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($dependencyInjector = NULL){}
        public function registerModules($modules, $merge = NULL){}
        public function getModules(){}
        public function setDefaultModule($defaultModule){}
        public function getDefaultModule(){}
        public function handle($uri = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}