
    <?php

    // Получение инстации request 
    $request = new \Phalcon\Http\Request();

    // Проверка что даные пришли методом POST
    if ($request->isPost() == true) {
        // Проверка что request создан через Ajax
        if ($request->isAjax() == true) {
            echo "Request создан используя POST и AJAX";
        }
    }

