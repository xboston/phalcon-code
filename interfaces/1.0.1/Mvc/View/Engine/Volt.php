<?php
namespace Phalcon\Mvc\View\Engine{
    class Volt extends \Phalcon\Mvc\View\Engine implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface,\Phalcon\Mvc\View\EngineInterface
    {
        public function setOptions($options){}
        public function getOptions(){}
        public function getCompiler(){}
        public function render($templatePath, $params, $mustClean = NULL){}
        public function length($item){}
        public function isIncluded($needle, $haystack){}
        public function converEncoding($text, $from, $to){}
        public function slice($value, $start, $end = NULL){}
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