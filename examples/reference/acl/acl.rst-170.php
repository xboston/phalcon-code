
    <?php

    // Создаем менеджер событий
    $eventsManager = new Phalcon\Events\Manager();

    // Прикрепляем слушателя (функцию/callback) к типу "acl"
    $eventsManager->attach("acl", function($event, $acl) {
        if ($event->getType() == 'beforeCheckAccess') {
             echo   $acl->getActiveRole(),
                    $acl->getActiveResource(),
                    $acl->getActiveAccess();
        }
    });

    $acl = new \Phalcon\Acl\Adapter\Memory();

    // Настраиваем $acl
    //...

    // Присваиваем менеджера событий к компоненту ACL
    $acl->setEventsManager($eventManagers);

