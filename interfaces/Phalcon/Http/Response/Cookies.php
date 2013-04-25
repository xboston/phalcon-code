<?php
namespace Phalcon\Http\Response;
interface Cookies extends \Phalcon\DI\InjectionAwareInterface
{
    public function __construct();
    public function setDI($dependencyInjector);
    public function getDI();
    public function set($name, $value = NULL, $expire = NULL, $path = NULL);
    public function get($name);
    public function reset();
}