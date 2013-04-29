<?php

//Create an instance
$encryption = new Phalcon\Crypt();

$key = 'le password';
$text = 'This is a secret text';

$encrypt = $encryption->encryptBase64($text, $key);

echo $encryption->decryptBase64($text, $key);

