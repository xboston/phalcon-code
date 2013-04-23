
    <?php

    $di->setShared('dispatcher', function() {

        // Создание/Получение менеджера событий EventManager
        $eventsManager = new Phalcon\Events\Manager();

        // Присоединение слушателя (listener)
        $eventsManager->attach("dispatch", function($event, $dispatcher, $exception) {

            // Контроллер существует а действие нет
            if ($event->getType() == 'beforeNotFoundAction') {
                $dispatcher->forward(array(
                    'controller' => 'index',
                    'action' => 'show404'
                ));
                return false;
            }

            // Альтернативный путь, контроллер или действие не существует
            if ($event->getType() == 'beforeException') {
                switch ($exception->getCode()) {
                    case Phalcon\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                    case Phalcon\Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                        $dispatcher->forward(array(
                            'controller' => 'index',
                            'action' => 'show404'
                        ));
                        return false;
                }
            }
        });

        $dispatcher = new Phalcon\Mvc\Dispatcher();

        // присоединение EventsManager к диспетчеру 
        $dispatcher->setEventsManager($eventsManager);

        return $dispatcher;

    }, true);

