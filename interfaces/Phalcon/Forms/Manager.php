<?php
namespace Phalcon\Forms;
interface Manager
{
    public function create($name = NULL, $entity = NULL);
    public function get();
}