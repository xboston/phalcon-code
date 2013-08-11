<?php
namespace Phalcon\Http\Request{

    abstract class File implements \Phalcon\Http\Request\FileInterface
    {
        public function __construct($file, $key = NULL){}
        public function getSize(){}
        public function getName(){}
        public function getTempName(){}
        public function getType(){}
        public function getRealType(){}
        public function getError(){}
        public function getKey(){}
        public function isUploadedFile(){}
        public function moveTo($destination){}
        public static function __set_state($file, $key = NULL){}
    }
}