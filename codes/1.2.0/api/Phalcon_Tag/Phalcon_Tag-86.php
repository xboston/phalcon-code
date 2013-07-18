<?php

//Assigning "peter" to "name" component
Phalcon\Tag::setDefaults(array( "name" => "peter" ));

//Later in the view
echo Phalcon\Tag::textField("name"); //Will have the value "peter" by default




