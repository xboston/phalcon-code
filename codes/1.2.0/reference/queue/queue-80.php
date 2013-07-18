<?php

while ( ($job = $b->peekReady()) !== false ) {

    $message = $job->getBody();

    var_dump($message);

    $job->delete();
}

