<?php
namespace Phalcon\Mvc\User{

    abstract class Plugin extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}