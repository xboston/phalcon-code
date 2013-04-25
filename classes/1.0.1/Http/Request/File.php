<?php
namespace Phalcon\Http\Request{
    class File implements \Phalcon\Http\Request\FileInterface
    {
        public function __construct($file){}
        public function getSize(){}
        public function getName(){}
        public function getTempName(){}
        public function moveTo($destination){}
    }
}