<?php

use Phalcon\Mvc\Model\Validator\InclusionIn as InclusionInValidator;

class Subscriptors extends Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(new InclusionInValidator(array(
            'field' => 'status',
            'domain' => array('A', 'I')
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

}



