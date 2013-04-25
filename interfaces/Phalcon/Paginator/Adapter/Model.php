<?php
namespace Phalcon\Paginator\Adapter;
interface Model extends \Phalcon\Paginator\AdapterInterface
{
    public function __construct($config);
    public function setCurrentPage($page);
    public function getPaginate();
}