<?php
namespace Phalcon\Tag{

    abstract class Select
    {
        public static function selectField($parameters, $data = NULL){}
        protected static function _optionsFromResultset(){}
        protected static function _optionsFromArray(){}
    }
}