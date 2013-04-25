<?php
namespace Phalcon\Mvc\Model\Query{
    class Builder implements \Phalcon\Mvc\Model\Query\BuilderInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($params = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function columns($columns){}
        public function getColumns(){}
        public function from($models){}
        public function addFrom($model, $alias = NULL){}
        public function getFrom(){}
        public function join($model, $conditions = NULL, $alias = NULL, $type = NULL){}
        public function leftJoin($model, $conditions = NULL, $alias = NULL){}
        public function rightJoin($model, $conditions = NULL, $alias = NULL){}
        public function where($conditions){}
        public function andWhere($conditions){}
        public function orWhere($conditions){}
        public function getWhere(){}
        public function orderBy($orderBy){}
        public function getOrderBy(){}
        public function having($having){}
        public function getHaving(){}
        public function limit($limit, $offset = NULL){}
        public function getLimit(){}
        public function offset($offset){}
        public function getOffset(){}
        public function groupBy($group){}
        public function getGroupBy(){}
        public function getPhql(){}
        public function getQuery(){}
    }
}