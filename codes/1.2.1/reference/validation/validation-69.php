<?php

$validation = new MyValidation();

$messages = $validation->validate($_POST);
if (count($messages)) {
    foreach ($messages as $message) {
        echo $message, '<br>';
    }
}

