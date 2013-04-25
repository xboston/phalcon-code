<?php
namespace Phalcon\Paginator\Adapter{
    class NativeArray implements \Phalcon\Paginator\AdapterInterface
    {
        public function __construct($config){}
        public function setCurrentPage($page){}
        public function getPaginate(){}
    }
}