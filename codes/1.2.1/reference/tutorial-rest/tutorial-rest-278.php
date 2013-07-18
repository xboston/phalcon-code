<?php

//Adds a new robot
$app->post('/api/robots', function() use ($app) {

    $robot = $app->request->getJsonRawBody();

    $phql = "INSERT INTO Robots (name, type, year) VALUES (:name:, :type:, :year:)";

    $status = $app->modelsManager->executeQuery($phql, array(
        'name' => $robot->name,
        'type' => $robot->type,
        'year' => $robot->year
    ));

    //Create a response
    $response = new Phalcon\Http\Response();

    //Check if the insertion was successful
    if ($status->success() == true) {

        $robot->id = $status->getModel()->id;

        $response->setJsonContent(array('status' => 'OK', 'data' => $robot));

    } else {

        //Change the HTTP status
        $response->setStatusCode(500, "Internal Error");

        //Send errors to the client
        $errors = array();
        foreach ($status->getMessages() as $message) {
            $errors[] = $message->getMessage();
        }

        $response->setJsonContent(array('status' => 'ERROR', 'messages' => $errors));
    }

    return $response;
});

