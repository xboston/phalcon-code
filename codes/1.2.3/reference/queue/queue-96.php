<?php

while ($queue->peekReady() !== false) {

    $job = $queue->reserve();

    $message = $job->getBody();

    var_dump($message);

    $job->delete();
}

