<?php

try {

    $application = new Phalcon\Mvc\Application($di);

    $application->useImplicitView(false);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage();
}

