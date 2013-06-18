<?php

//Create an instance
$crypt = new Phalcon\Crypt();

$key = 'le password';
$text = 'This is a secret text';

$encrypted = $crypt->encrypt($text, $key);

echo $crypt->decrypt($encrypted, $key);

