<?php

use Phalcon\Mvc\Model\Validator\ExclusionIn as ExclusionIn;

class Subscriptors extends Phalcon\Mvc\Collection
{

public function validation()
{
    $this->validate(new ExclusionIn(array(
        'field' => 'status',
        'domain' => array('A', 'I')
    )));
    if ($this->validationHasFailed() == true) {
        return false;
    }
}

}




