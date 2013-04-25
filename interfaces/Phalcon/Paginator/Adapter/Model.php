<?php
namespace Phalcon\Paginator\Adapter{
    abstract class Model implements \Phalcon\Paginator\AdapterInterface
    {
        public function __construct($config){}
        public function setCurrentPage($page){}
        public function getPaginate(){}
    }
}