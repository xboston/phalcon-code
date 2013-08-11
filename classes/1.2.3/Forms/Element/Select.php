<?php
namespace Phalcon\Forms\Element{

    abstract class Select extends \Phalcon\Forms\Element implements \Phalcon\Forms\ElementInterface
    {
        public function __construct($name, $options = NULL, $attributes = NULL){}
        public function setOptions($options){}
        public function getOptions(){}
        public function addOption($option){}
        public function render($attributes = NULL){}
        public function setForm($form){}
        public function getForm(){}
        public function setName($name){}
        public function getName(){}
        public function setFilters($filters){}
        public function addFilter($filter){}
        public function getFilters(){}
        public function addValidators($validators, $merge = NULL){}
        public function addValidator($validator){}
        public function getValidators(){}
        public function prepareAttributes($attributes = NULL, $useChecked = NULL){}
        public function setAttribute($attribute, $value){}
        public function getAttribute($attribute, $defaultValue = NULL){}
        public function setAttributes($attributes){}
        public function getAttributes(){}
        public function setUserOption($option, $value){}
        public function getUserOption($option, $defaultValue = NULL){}
        public function setUserOptions($options){}
        public function getUserOptions(){}
        public function setLabel($label){}
        public function getLabel(){}
        public function label(){}
        public function setDefault($value){}
        public function getDefault(){}
        public function getValue(){}
        public function getMessages(){}
        public function hasMessages(){}
        public function setMessages($group){}
        public function appendMessage($message){}
        public function clear(){}
        public function __toString(){}
    }
}