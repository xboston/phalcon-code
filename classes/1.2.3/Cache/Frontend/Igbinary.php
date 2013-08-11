<?php
namespace Phalcon\Cache\Frontend{

    abstract class Igbinary extends \Phalcon\Cache\Frontend\Data implements \Phalcon\Cache\FrontendInterface
    {
        public function beforeStore($data){}
        public function afterRetrieve($data){}
        public function __construct($frontendOptions = NULL){}
        public function getLifetime(){}
        public function isBuffering(){}
        public function start(){}
        public function getContent(){}
        public function stop(){}
    }
}