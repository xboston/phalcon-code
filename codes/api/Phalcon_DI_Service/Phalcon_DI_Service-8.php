
    <?php

     $service = new Phalcon\DI\Service('request', 'Phalcon\Http\Request');
     $request = $service->resolve();

