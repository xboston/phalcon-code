<?php

use Phalcon\Forms\Form , Phalcon\Forms\Element\Text , Phalcon\Forms\Element\Hidden;

class UsersForm extends Form
{
    /**
     * Forms initializer
     *
     * @param Users $user
     * @param array $options
     */
    public function initialize($user , $options)
    {

        if ( $options['edit'] ) {
            $this->add(new Hidden('id'));
        } else {
            $this->add(new Text('id'));
        }

        $this->add(new Text('name'));
    }
}

