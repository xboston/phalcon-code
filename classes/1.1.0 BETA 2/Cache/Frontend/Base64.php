<?php
namespace Phalcon\Cache\Frontend{

    abstract class Base64 implements \Phalcon\Cache\FrontendInterface
    {
        public function __construct($frontendOptions = NULL){}
        public function getLifetime(){}
        public function isBuffering(){}
        public function start(){}
        public function getContent(){}
        public function stop(){}
        public function beforeStore($data){}
        public function afterRetrieve($data){}
    }
}