<?php

use Phalcon\Mvc\Model\Validator\Numericality as NumericalityValidator;

class Products extends Phalcon\Mvc\Model
{

  public function validation()
  {
      $this->validate(new NumericalityValidator(array(
          'field' => 'price'
      )));
      if ($this->validationHasFailed() == true) {
          return false;
      }
  }

}



