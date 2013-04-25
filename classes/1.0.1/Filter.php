<?php
namespace Phalcon{
    class Filter implements \Phalcon\FilterInterface
    {
        public function __construct(){}
        public function add($name, $handler){}
        public function sanitize($value, $filters){}
        protected function _sanitize(){}
        public function getFilters(){}
    }
}