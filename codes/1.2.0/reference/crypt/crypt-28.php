<?php

//Create an instance
$crypt = new Phalcon\Crypt();

$texts = array(
    'my-key'    => 'This is a secret text' ,
    'other-key' => 'This is a very secret'
);

foreach ( $texts as $key => $text ) {

    //Perform the encryption
    $encrypted = $crypt->encrypt($text , $key);

    //Now decrypt
    echo $crypt->decrypt($encrypted , $key);
}

