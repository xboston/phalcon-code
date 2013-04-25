<?php
namespace Phalcon\Annotations;
interface Collection extends \Iterator,Traversable,Countable
{
    public function __construct($reflectionData = NULL);
    public function count();
    public function rewind();
    public function current();
    public function key();
    public function next();
    public function valid();
    public function getAnnotations();
    public function get($name);
    public function has($name);
}