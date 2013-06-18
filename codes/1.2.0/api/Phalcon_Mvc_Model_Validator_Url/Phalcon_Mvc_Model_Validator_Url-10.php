<?php

use Phalcon\Mvc\Model\Validator\Url as UrlValidator;

class Posts extends Phalcon\Mvc\Model
{

  public function validation()
  {
      $this->validate(new UrlValidator(array(
          'field' => 'source_url'
      )));
      if ($this->validationHasFailed() == true) {
          return false;
      }
  }

}



