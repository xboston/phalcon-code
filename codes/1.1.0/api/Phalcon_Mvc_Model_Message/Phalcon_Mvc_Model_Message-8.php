<?php

  use Phalcon\Mvc\Model\Message as Message;

  class Robots extends Phalcon\Mvc\Model
  {

    public function beforeSave()
    {
      if ($this->name == 'Peter') {
        $text = "A robot cannot be named Peter";
        $field = "name";
        $type = "InvalidValue";
        $message = new Message($text, $field, $type);
        $this->appendMessage($message);
     }
   }

 }



