
    <?php

    //Change the service class name
    $di->getService('logger')->setClassName('MyCustomLogger');

    //Change the first parameter without instantiate the logger
    $di->getService('logger')->setParameter(0, array(
        'type' => 'parameter',
        'value' => '../apps/logs/error.log'
    ));

