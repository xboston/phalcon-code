<?php

// Получение робота по ключу
$app->get('/api/robots/{id:[0-9]+}', function($id) use ($app) {

    $phql = "SELECT * FROM Robots WHERE id = :id:";
    $robot = $app->modelsManager->executeQuery($phql, array(
        'id' => $id
    ))->getFirst();

    if ($robot==false) {
        $response = array('status' => 'NOT-FOUND');
    } else {
        $response = array(
            'status' => 'FOUND',
            'data' => array(
                'id' => $robot->id,
                'name' => $robot->name
            )
        );
    }

    echo json_encode($response);
});

