<?php

use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

class Subscriptors extends Phalcon\Mvc\Model
{

  public function validation()
  {
      $this->validate(new UniquenessValidator(array(
          'field' => 'email'
      )));
      $this->validate(new UniquenessValidator(array(
          'field' => array('username','phone')
      )));
      if ($this->validationHasFailed() == true) {
          return false;
      }
  }

}



