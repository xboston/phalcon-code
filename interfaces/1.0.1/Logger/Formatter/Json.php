<?php
namespace Phalcon\Logger\Formatter{
    abstract class Json implements \Phalcon\Logger\FormatterInterface
    {
        public function format($message, $type, $timestamp){}
        public function getTypeString($type){}
    }
}