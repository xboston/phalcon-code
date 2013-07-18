<?php

use Phalcon\Mvc\Model\Validator\ExclusionIn as ExclusionInValidator;

class Subscriptors extends Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(
            new ExclusionInValidator(array(
                                          'field'  => 'status' ,
                                          'domain' => array( 'A' , 'I' )
                                     ))
        );
        if ( $this->validationHasFailed() == true ) {
            return false;
        }
    }

}



