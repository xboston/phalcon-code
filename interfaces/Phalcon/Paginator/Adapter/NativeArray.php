<?php
namespace Phalcon\Paginator\Adapter{
    abstract class NativeArray implements \Phalcon\Paginator\AdapterInterface
    {
        public function __construct($config){}
        public function setCurrentPage($page){}
        public function getPaginate(){}
    }
}