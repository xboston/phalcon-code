<?php

use Phalcon\Validation\Validator\StringLength as StringLength;

$validation->validate('name_last', new StringLength(array(
'max' => 50,
'min' => 2,
'messageMaximum' => 'We don't like really long names',
'messageMinimum' => 'We want more than just their initials'
)));



