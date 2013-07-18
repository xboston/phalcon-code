<?php

$messages = $validation->validate();
if ( count($messages) ) {
    //Filter only the messages generated for the field 'name'
    foreach ( $validation->getMessages()->filter('name') as $message ) {
        echo $message;
    }
}

