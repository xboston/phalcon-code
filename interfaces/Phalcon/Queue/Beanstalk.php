<?php
namespace Phalcon\Queue;
interface Beanstalk
{
    public function __construct($options = NULL);
    public function connect();
    public function put($data, $options = NULL);
    public function reserve($timeout = NULL);
    public function choose($tube);
    public function watch($tube);
    public function peekReady();
    public function readStatus();
    public function read($length = NULL);
    public function write();
    public function disconnect();
}