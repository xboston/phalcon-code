<?php
namespace Phalcon\Tag{
    abstract class Select
    {
        public static function selectField($parameters, $data = NULL){}
        public static function _optionsFromResultset(){}
        public static function _optionsFromArray(){}
    }
}