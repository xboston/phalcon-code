<?php
namespace Phalcon\Queue\Beanstalk{
    class Job
    {
        public function __construct($queue, $id, $body){}
        public function getId(){}
        public function getBody(){}
        public function delete(){}
    }
}