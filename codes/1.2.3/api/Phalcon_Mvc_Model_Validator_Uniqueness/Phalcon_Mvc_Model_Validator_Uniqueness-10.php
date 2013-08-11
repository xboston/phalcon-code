<?php

use Phalcon\Mvc\Model\Validator\Uniqueness as Uniqueness;

class Subscriptors extends Phalcon\Mvc\Model
{

  public function validation()
  {
      $this->validate(new Uniqueness(array(
          'field' => 'email'
      )));
      if ($this->validationHasFailed() == true) {
          return false;
      }
  }

}



