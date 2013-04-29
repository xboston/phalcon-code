<?php

//Create an instance
$encryption = new Phalcon\Crypt();

$key = 'le password';
$text = 'This is a secret text';

$encrypted = $encryption->encrypt($text, $key);

echo $encryption->decrypt($encrypted, $key);

