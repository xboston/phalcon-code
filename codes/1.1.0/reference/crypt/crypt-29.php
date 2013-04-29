<?php

//Create an instance
$encryption = new Phalcon\Crypt();

$texts = array(
    'my-key' => 'This is a secret text',
    'other-key' => 'This is a very secret'
);

foreach ($texts as $key => $text) {

    //Perform the encryption
    $encrypted = $encryption->encrypt($text, $key);

    //Now decrypt
    echo $encryption->decrypt($encrypted, $key);
}

