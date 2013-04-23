<?php

use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class Subscriptors extends Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(new EmailValidator(array(
            'field' => 'electronic_mail'
          )));
          if ($this->validationHasFailed() == true) {
            return false;
          }
      }

}



