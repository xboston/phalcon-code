<?php

while (($job = $queue->peekReady()) !== false) {

    $message = $job->getBody();

    var_dump($message);

    $job->delete();
}

