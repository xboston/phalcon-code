<?php

//Adds a new robot
$app->post('/api/robots', function() use ($app) {

    $robot = json_decode($app->request->getRawBody());

    $phql = "INSERT INTO Robots (name, type, year) VALUES (:name:, :type:, :year:)";

    $status = $app->modelsManager->executeQuery($phql, array(
        'name' => $robot->name,
        'type' => $robot->type,
        'year' => $robot->year
    ));

    //Check if the insertion was successfull
    if($status->success()==true){

        $robot->id = $status->getModel()->id;

        $response = array('status' => 'OK', 'data' => $robot);

    } else {

        //Change the HTTP status
        $this->response->setStatusCode(500, "Internal Error")->sendHeaders();

        //Send errors to the client
        $errors = array();
        foreach ($status->getMessages() as $message) {
            $errors[] = $message->getMessage();
        }

        $response = array('status' => 'ERROR', 'messages' => $errors);

    }

    echo json_encode($response);

});

