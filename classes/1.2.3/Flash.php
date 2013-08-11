<?php
namespace Phalcon{

    abstract class Flash
    {
        public function __construct($cssClasses = NULL){}
        public function setImplicitFlush($implicitFlush){}
        public function setAutomaticHtml($automaticHtml){}
        public function setCssClasses($cssClasses){}
        public function error($message){}
        public function notice($message){}
        public function success($message){}
        public function warning($message){}
        public function outputMessage($type, $message){}
    }
}