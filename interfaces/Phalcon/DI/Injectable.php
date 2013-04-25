<?php
namespace Phalcon\DI{
    abstract class Injectable implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}