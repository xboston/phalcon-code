<?php

use Phalcon\Validation\Validator\Regex as RegexValidator;

$validator->add('created_at', new RegexValidator(array(
   'pattern' => '/^[0-9]{4}[-\/](0[1-9]|1[12])[-\/](0[1-9]|[12][0-9]|3[01])$/',
   'message' => 'The creation date is invalid'
)));



