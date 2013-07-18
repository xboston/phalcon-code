<?php

use Phalcon\Mvc\Model\Validator\Regex as RegexValidator;

class Subscriptors extends Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(
            new RegexValidator(array(
                                    'field'   => 'created_at' ,
                                    'pattern' => '/^[0-9]{4}[-\/](0[1-9]|1[12])[-\/](0[1-9]|[12][0-9]|3[01])$/'
                               ))
        );
        if ( $this->validationHasFailed() == true ) {
            return false;
        }
    }

}



