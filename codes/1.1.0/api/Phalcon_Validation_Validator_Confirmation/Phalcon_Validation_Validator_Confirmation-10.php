<?php

use Phalcon\Validation\Validator\Confirmation;

$validator->add('password', new Confirmation(array(
   'message' => 'Password doesn\'t match confirmation',
   'with' => 'confirmPassword'
)));



