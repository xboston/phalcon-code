<?php
namespace Phalcon\Http\Request{
    interface FileInterface
    {
        public function __construct($file);
        public function getSize();
        public function getName();
        public function getTempName();
        public function moveTo($destination);
    }
}