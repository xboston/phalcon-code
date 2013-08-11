<?php
namespace Phalcon\Forms{

    abstract class Form extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface,\Countable,\Iterator,\Traversable
    {
        public function __construct($entity = NULL, $userOptions = NULL){}
        public function setAction($action){}
        public function getAction(){}
        public function setUserOption($option, $value){}
        public function getUserOption($option, $defaultValue = NULL){}
        public function setUserOptions($options){}
        public function getUserOptions(){}
        public function setEntity($entity){}
        public function getEntity(){}
        public function getElements(){}
        public function bind($data, $entity, $whitelist = NULL){}
        public function isValid($data = NULL, $entity = NULL){}
        public function getMessages($byItemName = NULL){}
        public function getMessagesFor($name){}
        public function hasMessagesFor($name){}
        public function add($element){}
        public function render($name, $attributes = NULL){}
        public function get($name){}
        public function label($name){}
        public function getLabel($name){}
        public function getValue($name){}
        public function has($name){}
        public function remove($name){}
        public function clear($fields = NULL){}
        public function count(){}
        public function rewind(){}
        public function current(){}
        public function key(){}
        public function next(){}
        public function valid(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}