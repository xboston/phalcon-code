<?php
namespace Phalcon;
interface Version
{
    public static function _getVersion();
    public static function get();
    public static function getId();
}