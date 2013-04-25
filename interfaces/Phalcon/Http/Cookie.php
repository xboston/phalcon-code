<?php
namespace Phalcon\Http;
interface Cookie extends \Phalcon\DI\InjectionAwareInterface
{
    public function __construct($name, $value = NULL, $expire = NULL, $path = NULL);
    public function setDI($dependencyInjector);
    public function getDI();
    public function setValue($value);
    public function getValue($filters = NULL, $defaultValue = NULL);
    public function setExpiration($expire);
    public function getExpiration();
    public function setPath($path);
    public function getPath();
    public function setSecure($secure);
    public function getSecure();
}