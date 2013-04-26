<?php
namespace Phalcon\Paginator\Adapter{

    abstract class QueryBuilder implements \Phalcon\Paginator\AdapterInterface
    {
        public function __construct($config){}
        public function setCurrentPage($currentPage){}
        public function getPaginate(){}
    }
}