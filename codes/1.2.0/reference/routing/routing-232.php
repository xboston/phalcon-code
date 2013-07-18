<?php

//First position must be skipped because it is used for
//the named parameter 'country'
$router->add(
    '/news/{country:[a-z]{2}}/([a-z+])/([a-z\-+])' ,
    array(
         'section' => 2 , //Positions start with 2
         'article' => 3
    )
);

