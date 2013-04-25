<?php
namespace Phalcon\Queue\Beanstalk;
abstract class Job
{
    public function __construct($queue, $id, $body){}
    public function delete(){}
}