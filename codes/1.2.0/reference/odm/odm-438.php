<?php

class Robots extends \Phalcon\Mvc\Collection
{

    public function beforeSave()
    {
        if ( $this->year < 0 ) {
            echo "Year cannot be smaller than zero!";

            return false;
        }
    }

}

