<?php
namespace Phalcon\Db{

    interface ResultInterface
    {
        public function __construct($connection, $result, $sqlStatement = NULL, $bindParams = NULL, $bindTypes = NULL);
        public function execute();
        public function fetch();
        public function fetchArray();
        public function fetchAll();
        public function numRows();
        public function dataSeek($number);
        public function setFetchMode($fetchMode);
        public function getInternalResult();
    }
}