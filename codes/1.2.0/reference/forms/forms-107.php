<?php

use Phalcon\Forms\Form , Phalcon\Forms\Element\Text , Phalcon\Forms\Element\Hidden;

class ContactForm extends Form
{

    /**
     * This method returns the default value for field 'csrf'
     */
    public function getCsrf()
    {
        return $this->security->getToken();
    }

    public function initialize()
    {

        //Set the same form as entity
        $this->setEntity($this);

        //Add a text element to capture the 'email'
        $this->add(new Text("email"));

        //Add a text element to put a hidden csrf
        $this->add(new Hidden("csrf"));
    }
}

