
    <?php

    $di = new Phalcon\DI();

    $di->set('storage', function() {
        return new Storage('/some/directory');
    }, true);

