
    <?php

    // Добавление нового робота
    $app->post('/api/robots', function() use ($app) {

        $robot = json_decode($app->request->getRawBody());

        $phql = "INSERT INTO Robots (name, type, year) VALUES (:name:, :type:, :year:)";

        $status = $app->modelsManager->executeQuery($phql, array(
            'name' => $robot->name,
            'type' => $robot->type,
            'year' => $robot->year
        ));

        // Проверка, что вставка произведена успешно
        if($status->success()==true){

            $robot->id = $status->getModel()->id;

            $response = array('status' => 'OK', 'data' => $robot);

        } else {

            // Изменение HTML статуса
            $this->response->setStatusCode(500, "Internal Error")->sendHeaders();

            // Отправка ошибки на клиент
            $errors = array();
            foreach ($status->getMessages() as $message) {
                $errors[] = $message->getMessage();
            }

            $response = array('status' => 'ERROR', 'messages' => $errors);

        }

        echo json_encode($response);

    });

