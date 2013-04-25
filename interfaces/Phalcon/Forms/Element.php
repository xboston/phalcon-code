<?php
namespace Phalcon\Forms{
    abstract class Element
    {
        public function __construct($name, $attributes = NULL){}
        public function setForm($form){}
        public function getForm(){}
        public function setName($name){}
        public function getName(){}
        public function addValidators($validators, $merge = NULL){}
        public function addValidator($validator){}
        public function getValidators(){}
        public function prepareAttributes($attributes){}
        public function setAttribute($attribute, $value){}
        public function setAttributes($attributes){}
        public function getAttributes(){}
        public function setLabel($label){}
        public function getLabel(){}
        public function __toString(){}
    }
}