<?php
namespace Phalcon\Logger\Formatter;
interface Line extends \Phalcon\Logger\FormatterInterface
{
    public function __construct($format = NULL, $dateFormat = NULL);
    public function setFormat($format);
    public function getFormat();
    public function setDateFormat($date);
    public function getDateFormat();
    public function format($message, $type, $timestamp);
    public function getTypeString($type);
}