<?php

use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Select;

class ContactsForm extends Form
{
    public function initialize()
    {
        $this->add(new Text("name"));

        $this->add(new Text("telephone"));

        $this->add(new Select("telephoneType", TelephoneTypes::find(), array(
            'using' => array('id', 'name')
        )));
    }        
}

