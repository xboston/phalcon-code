<?php
namespace Phalcon\Http{

    abstract class Cookie implements \Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($name, $value = NULL, $expire = NULL, $path = NULL, $secure = NULL, $domain = NULL, $httpOnly = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setValue($value){}
        public function getValue($filters = NULL, $defaultValue = NULL){}
        public function send(){}
        public function restore(){}
        public function delete(){}
        public function useEncryption($useEncryption){}
        public function isUsingEncryption(){}
        public function setExpiration($expire){}
        public function getExpiration(){}
        public function setPath($path){}
        public function getPath(){}
        public function setDomain($domain){}
        public function getDomain(){}
        public function setSecure($secure){}
        public function getSecure(){}
        public function setHttpOnly($httpOnly){}
        public function getHttpOnly(){}
        public function __toString(){}
    }
}