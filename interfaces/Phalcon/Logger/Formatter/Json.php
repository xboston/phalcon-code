<?php
namespace Phalcon\Logger\Formatter;
interface Json extends \Phalcon\Logger\FormatterInterface
{
    public function format($message, $type, $timestamp);
    public function getTypeString($type);
}