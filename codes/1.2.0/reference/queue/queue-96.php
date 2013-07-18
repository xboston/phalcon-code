<?php

while ( $b->peekReady() !== false ) {

    $job = $b->reserve();

    $message = $job->getBody();

    var_dump($message);

    $job->delete();
}

