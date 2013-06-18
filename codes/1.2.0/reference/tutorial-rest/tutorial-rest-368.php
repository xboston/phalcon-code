<?php

//Deletes robots based on primary key
$app->delete('/api/robots/{id:[0-9]+}', function($id) use ($app) {

    $phql = "DELETE FROM Robots WHERE id = :id:";
    $status = $app->modelsManager->executeQuery($phql, array(
        'id' => $id
    ));
    if ($status->success() == true) {

        $response = array('status' => 'OK');

    } else {

        //Change the HTTP status
        $this->response->setStatusCode(500, "Internal Error")->sendHeaders();

        $errors = array();
        foreach ($status->getMessages() as $message) {
            $errors[] = $message->getMessage();
        }

        $response = array('status' => 'ERROR', 'messages' => $errors);

    }

    echo json_encode($response);

});

