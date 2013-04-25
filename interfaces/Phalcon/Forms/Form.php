<?php
namespace Phalcon\Forms;
interface Form extends \Countable,\Iterator,\Traversable
{
    public function __construct($entity = NULL);
    public function setEntity($entity);
    public function getEntity();
    public function getElements();
    public function bind($data, $entity, $whitelist = NULL);
    public function isValid($data = NULL, $entity = NULL);
    public function getMessages($byItemName = NULL);
    public function getMessagesFor($name);
    public function add($element);
    public function render($name, $attributes = NULL);
    public function get($name);
    public function label($name);
    public function getLabel($name);
    public function getValue($name);
    public function has($name);
    public function remove($name);
    public function count();
    public function rewind();
    public function current();
    public function key();
    public function next();
    public function valid();
}