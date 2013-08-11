<?php

//Create an instance
$crypt = new Phalcon\Crypt();

$key = 'le password';
$text = 'This is a secret text';

$encrypt = $crypt->encryptBase64($text, $key);

echo $crypt->decryptBase64($text, $key);

