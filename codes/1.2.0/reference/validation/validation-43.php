<?php

use Phalcon\Validation,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email;

class MyValidation extends Validation
{
    public function initialize()
    {
        $this->add('name', new PresenceOf(array(
            'message' => 'The name is required'
        )));

        $this->add('email', new PresenceOf(array(
            'message' => 'The e-mail is required'
        )));

        $this->add('email', new Email(array(
            'message' => 'The e-mail is not valid'
        )));
    }
}

