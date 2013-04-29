<?php

use Phalcon\Validation\Validator\ExclusionIn;

$validator->add('status', new ExclusionIn(array(
   'message' => 'The status must not be A or B'
   'domain' => array('A', 'B')
)));



