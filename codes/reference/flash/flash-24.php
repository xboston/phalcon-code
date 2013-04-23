
    <?php

    // Устанавливаем сервис
    $di->set('flash', function() {
        return new \Phalcon\Flash\Direct();
    });

