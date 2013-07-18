<?php

// Using data from a resultset
echo Phalcon\Tag::select(
    array(
         "productId" ,
         Products::find("type = 'vegetables'") ,
         "using" => array( "id" , "name" )
    )
);

// Using data from an array
echo Phalcon\Tag::selectStatic(
    array(
         "status" ,
         array(
             "A" => "Active" ,
             "I" => "Inactive" ,
         )
    )
);

