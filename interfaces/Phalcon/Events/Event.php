<?php
namespace Phalcon\Events{
    abstract class Event
    {
        public function __construct($type, $source, $data = NULL, $cancelable = NULL){}
        public function setType($eventType){}
        public function getType(){}
        public function getSource(){}
        public function setData($data){}
        public function getData(){}
        public function setCancelable($cancelable){}
        public function getCancelable(){}
        public function stop(){}
        public function isStopped(){}
    }
}