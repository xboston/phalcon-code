<?php
namespace Phalcon\Http\Response{

    interface CookiesInterface
    {
        public function useEncryption($useEncryption);
        public function isUsingEncryption();
        public function set($name, $value = NULL, $expire = NULL, $path = NULL, $secure = NULL, $httpOnly = NULL);
        public function get($name);
        public function send();
        public function reset();
    }
}