<?php
namespace Phalcon\Assets\Resource{

    abstract class Js extends \Phalcon\Assets\Resource
    {
        public function __construct($path, $local = NULL){}
        public function getType(){}
        public function getPath(){}
        public function getLocal(){}
    }
}