<?php
namespace Phalcon\Assets{

    abstract class Resource
    {
        public function __construct($type, $path, $local = NULL){}
        public function getType(){}
        public function getPath(){}
        public function getLocal(){}
    }
}