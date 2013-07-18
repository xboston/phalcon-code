<?php

use Phalcon\Validation\Validator\Identical;

$validator->add('terms', new Identical(array(
   'accepted' => 'yes',
   'message' => 'Terms and conditions must be accepted'
)));



