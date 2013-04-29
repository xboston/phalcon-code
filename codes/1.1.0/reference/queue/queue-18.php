<?php

//Connect to the queue
$queue = new Phalcon\Queue\Beanstalk(array(
    'host' => '192.168.0.21'
));

//Insert the job in the queue
$queue->put(array('proccessVideo' => 4871));

