<?php
namespace Phalcon\Mvc\View{

    abstract class Engine extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($view, $dependencyInjector = NULL){}
        public function getContent(){}
        public function partial($partialPath){}
        public function getView(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}