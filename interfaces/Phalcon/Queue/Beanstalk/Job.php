<?php
namespace Phalcon\Queue\Beanstalk;
interface Job
{
    public function __construct($queue, $id, $body);
    public function delete();
}