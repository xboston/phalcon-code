<?php

use Phalcon\Validation\Validator\Between;

$validator->add('name', new Between(array(
   'minimum' => 0
   'maximum' => 100
   'message' => 'The price must be between 0 and 100'
)));



