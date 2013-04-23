
    <?php

    // Направляем поток на другое действие текущего контроллера
    $this->dispatcher->forward(array(
        "action" => "search"
    ));

    // Направляем поток на другое действие текущего контроллера с передачей параметров
    $this->dispatcher->forward(array(
        "action" => "search",
        "params" => array(1, 2, 3)
    ));

