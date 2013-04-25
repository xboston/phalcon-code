<?php
namespace Phalcon\Mvc\Model\Query{
    interface BuilderInterface
    {
        public function __construct($params = NULL);
        public function columns($columns);
        public function getColumns();
        public function from($models);
        public function addFrom($model, $alias = NULL);
        public function getFrom();
        public function join($model, $conditions = NULL, $alias = NULL);
        public function where($conditions);
        public function andWhere($conditions);
        public function orWhere($conditions);
        public function getWhere();
        public function orderBy($orderBy);
        public function getOrderBy();
        public function having($having);
        public function getHaving();
        public function limit($limit, $offset = NULL);
        public function getLimit();
        public function groupBy($group);
        public function getGroupBy();
        public function getPhql();
        public function getQuery();
    }
}