<?php
namespace Phalcon\Mvc\Model{
    interface QueryInterface
    {
        public function __construct($phql);
        public function parse();
        public function execute($bindParams = NULL, $bindTypes = NULL);
    }
}