<?php
namespace Phalcon\CLI{

    abstract class Console implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function registerModules($modules){}
        public function addModules($modules){}
        public function getModules(){}
        public function handle($arguments = NULL){}
    }
}