<?php

$messages = $validation->validate();
if (count($messages)) {
    foreach ($validation->getMessages() as $message) {
        echo "Message: ", $message->getMessage(), "\n";
        echo "Field: ", $message->getField(), "\n";
        echo "Type: ", $message->getType(), "\n";
    }
}

