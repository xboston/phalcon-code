<?php
namespace Phalcon\Translate{

    interface AdapterInterface
    {
        public function __construct($options);
        public function _($translateKey, $placeholders = NULL);
        public function query($index, $placeholders = NULL);
        public function exists($index);
    }
}