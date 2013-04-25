<?php
namespace Phalcon\Cache;
interface Multiple
{
    public function __construct($backends = NULL);
    public function push($backend);
    public function get($keyName, $lifetime = NULL);
    public function start($keyName, $lifetime = NULL);
    public function save($keyName = NULL, $content = NULL, $lifetime = NULL, $stopBuffer = NULL);
    public function delete($keyName);
    public function exists($keyName = NULL, $lifetime = NULL);
}