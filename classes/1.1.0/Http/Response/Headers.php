<?php
namespace Phalcon\Http\Response{

    abstract class Headers implements \Phalcon\Http\Response\HeadersInterface
    {
        public function set($name, $value){}
        public function get($name){}
        public function setRaw($header){}
        public function send(){}
        public function reset(){}
        public static function __set_state($data){}
    }
}