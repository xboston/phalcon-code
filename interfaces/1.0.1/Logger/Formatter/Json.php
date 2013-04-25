<?php
namespace Phalcon\Logger\Formatter{
    abstract class Json extends \Phalcon\Logger\Formatter implements \Phalcon\Logger\FormatterInterface
    {
        public function format($message, $type, $timestamp){}
        public function getTypeString($type){}
    }
}