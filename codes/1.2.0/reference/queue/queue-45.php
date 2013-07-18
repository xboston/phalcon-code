<?php

//Insert the job in the queue with options
$queue->put(
    array( 'processVideo' => 4871 ) ,
    array( 'priority' => 250 , 'delay' => 10 , 'ttr' => 3600 )
);

