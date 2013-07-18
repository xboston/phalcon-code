<?php

echo Phalcon\Tag::select(
    array(
         "robotId" ,
         Robots::find("type = 'mechanical'") ,
         "using" => array( "id" , "name" )
    )
);

