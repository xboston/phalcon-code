<?php

//Create an instance
$crypt = new Phalcon\Crypt();

//Use blowfish
$crypt->setCipher('blowfish');

$key  = 'le password';
$text = 'This is a secret text';

echo $crypt->encrypt($text , $key);

