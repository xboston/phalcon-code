<?php

use Phalcon\Forms\Element\Text,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\StringLength;

$name = new Text("name");

$name->addValidator(new PresenceOf(array(
    'message' => 'The name is required'
)));

$name->addValidator(new StringLength(array(
    'min' => 10,
    'messageMinimum' => 'The name is too short'
)));

$form->add($name);

