<?php

class Robots extends \Phalcon\Mvc\Model
{

    public function columnMap()
    {
        //Keys are the real names in the table and
        //the values their names in the application
        return array(
            'id' => 'code',
            'the_name' => 'theName',
            'the_type' => 'theType',
            'the_year' => 'theYear'
        );
    }

}

