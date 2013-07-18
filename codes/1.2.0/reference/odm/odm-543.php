<?php

class Customers extends \Phalcon\Mvc\Collection
{

    public function validation()
    {
        $this->validate(
            new UrlValidator(array(
                                  "field" => "url" ,
                             ))
        );
        if ( $this->validationHasFailed() == true ) {
            return false;
        }
    }

}

