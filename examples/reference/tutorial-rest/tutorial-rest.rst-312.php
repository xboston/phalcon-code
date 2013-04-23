
    <?php

    // Обновление робота по ключу
    $app->put('/api/robots/{id:[0-9]+}', function($id) use($app) {

        $robot = json_decode($app->request->getRawBody());

        $phql = "UPDATE Robots SET name = :name:, type = :type:, year = :year: WHERE id = :id:";
        $status = $app->modelsManager->executeQuery($phql, array(
            'id' => $id,
            'name' => $robot->name,
            'type' => $robot->type,
            'year' => $robot->year
        ));

        // Проверка, что обновление произведено успешно
        if($status->success()==true){

            $response = array('status' => 'OK');

        } else {

            // Изменение HTML статуса
            $this->response->setStatusCode(500, "Internal Error")->sendHeaders();

            $errors = array();
            foreach ($status->getMessages() as $message) {
                $errors[] = $message->getMessage();
            }

            $response = array('status' => 'ERROR', 'messages' => $errors);

        }

        echo json_encode($response);

    });

