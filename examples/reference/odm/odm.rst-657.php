
    <?php

    // This service returns a mongo database at 192.168.1.100
    $di->set('mongo1', function() {
        $mongo = new Mongo("mongodb://scott:nekhen@192.168.1.100");
        return $mongo->selectDb("management");
    }, true);

    // This service returns a mongo database at localhost
    $di->set('mongo2', function() {
        $mongo = new Mongo("mongodb://localhost");
        return $mongo->selectDb("invoicing");
    }, true);

