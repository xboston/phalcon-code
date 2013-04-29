<?php

use Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Regex;

$validation = new Phalcon\Validation();

$validation
    ->add('telephone', new PresenceOf(array(
        'message' => 'The telephone is required',
        'cancelOnFail' => true
    )))
    ->add('telephone', new Regex(array(
        'message' => 'The telephone is required',
        'pattern' => '/\+44 [0-9]+/'
    )))
    ->add('telephone', new StringLength(array(
        'minimumMessage' => 'The telephone is required',
        'pattern' => '/\+44 [0-9]+/'
    )));

