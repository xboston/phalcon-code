<?php
namespace Phalcon\Http\Response{

    abstract class Cookies implements \Phalcon\Http\Response\CookiesInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function useEncryption($useEncryption){}
        public function isUsingEncryption(){}
        public function set($name, $value = NULL, $expire = NULL, $path = NULL, $secure = NULL, $domain = NULL, $httpOnly = NULL){}
        public function get($name){}
        public function has($name){}
        public function delete($name){}
        public function send(){}
        public function reset(){}
    }
}