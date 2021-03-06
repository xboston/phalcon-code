<?php
namespace Phalcon\Mvc\View\Engine{

    abstract class Php extends \Phalcon\Mvc\View\Engine implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface,\Phalcon\Mvc\View\EngineInterface
    {
        public function render($path, $params, $mustClean = NULL){}
        public function __construct($view, $dependencyInjector = NULL){}
        public function getContent(){}
        public function partial($partialPath, $params = NULL){}
        public function getView(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}