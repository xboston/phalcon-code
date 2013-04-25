<?php
namespace Phalcon{
    class Validation extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($validators = NULL){}
        public function validate($data = NULL, $entity = NULL){}
        public function add($attribute, $validator){}
        public function setFilters($attribute, $filters){}
        public function getFilters($attribute = NULL){}
        public function getValidators(){}
        public function getEntity(){}
        public function getMessages(){}
        public function appendMessage($message){}
        public function bind($entity, $data){}
        public function getValue($attribute){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}