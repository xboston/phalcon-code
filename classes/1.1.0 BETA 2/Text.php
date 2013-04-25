<?php
namespace Phalcon{

    abstract class Text
    {
        const RANDOM_ALNUM = 0;
        const RANDOM_ALPHA = 1;
        const RANDOM_HEXDEC = 2;
        const RANDOM_NUMERIC = 3;
        const RANDOM_NOZERO = 4;
        public static function camelize($str){}
        public static function uncamelize($str){}
        public static function increment($str, $separator = NULL){}
        public static function random($type, $length = NULL){}
        public static function startsWith($str, $start, $ignoreCase = NULL){}
        public static function endsWith($str, $end, $ignoreCase = NULL){}
        public static function lower($str){}
        public static function upper($str){}
    }
}