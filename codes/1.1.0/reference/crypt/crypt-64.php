<?php

//Create an instance
$encryption = new Phalcon\Crypt();

//Use blowfish
$encryption->setCipher('blowfish');

$key = 'le password';
$text = 'This is a secret text';

echo $encryption->encrypt($text, $key);

