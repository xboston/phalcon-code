<?php

$messages = null;

$process = function() use (&$messages) {
    foreach (Cars::find("id > 101") as $car) {
        $car->price = 15000;
        if ($car->save() == false) {
            $messages = $car->getMessages();
            return false;
        }
    }
    return true;
};

$success = $process();

