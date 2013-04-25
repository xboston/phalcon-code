<?php
namespace Phalcon\Logger;
abstract class Multiple
{
    public function push($logger){}
    public function getLoggers(){}
    public function setFormatter($formatter){}
    public function getFormatter(){}
    public function log($message, $type = NULL){}
    public function emergence($message){}
    public function debug($message){}
    public function error($message){}
    public function info($message){}
    public function notice($message){}
    public function warning($message){}
    public function alert($message){}
}