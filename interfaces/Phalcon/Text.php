<?php
namespace Phalcon;
interface Text
{
    public static function camelize($str);
    public static function uncamelize($str);
    public static function increment($str, $separator = NULL);
    public static function random($type, $length = NULL);
    public static function startsWith($str, $start, $ignoreCase = NULL);
    public static function endsWith($str, $end, $ignoreCase = NULL);
    public static function lower($str);
    public static function upper($str);
}