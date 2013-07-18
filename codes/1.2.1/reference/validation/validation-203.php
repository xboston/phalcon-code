<?php

use Phalcon\Validation\Validator\Email;

$validation->add('email', new Email(array(
    'message' => 'The e-mail is not valid'
)));

