<?php

use Phalcon\Mvc\Model\Validator\PresenceOf;

class Subscriptors extends Phalcon\Mvc\Model
{

  public function validation()
  {
      $this->validate(new PresenceOf(array(
          'field' => 'name',
          'message' => 'The name is required'
      )));
      if ($this->validationHasFailed() == true) {
          return false;
      }
  }

}



