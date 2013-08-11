<?php
namespace Phalcon\Logger\Formatter{

    abstract class Firephp extends \Phalcon\Logger\Formatter implements \Phalcon\Logger\FormatterInterface
    {
        public function getTypeString($type){}
        public function format($message, $type, $timestamp){}
    }
}