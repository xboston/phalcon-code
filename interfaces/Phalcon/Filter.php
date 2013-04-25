<?php
namespace Phalcon;
interface Filter extends \Phalcon\FilterInterface
{
    public function __construct();
    public function add($name, $handler);
    public function sanitize($value, $filters);
    public function _sanitize();
    public function getFilters();
}