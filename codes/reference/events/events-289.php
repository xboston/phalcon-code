
    <?php

    $eventsManager->attach('db', function($event, $connection){

        // Если событие поддерживает прекращение
        if ($event->isCancelable()) {
            // Прекращение события, остальные слушатели его не получат
            $event->stop();
        }

        //...

    });

