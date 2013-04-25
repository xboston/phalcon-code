<?php

use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Select;

$form = new Form();

$form->add(new Text("name"));

$form->add(new Text("telephone"));

$form->add(new Select("telephoneType", array(
    'H' => 'Home',
    'C' => 'Cell'
)));

