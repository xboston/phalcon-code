<?php

$form->bind($_POST , $robot);

//Check if the form is valid
if ( $form->isValid() ) {

    //Save the entity
    $robot->save();
}

