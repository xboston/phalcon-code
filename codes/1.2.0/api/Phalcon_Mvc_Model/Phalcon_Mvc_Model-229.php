<?php

$robot = \Phalcon\Mvc\Model::cloneResultMap(
    new Robots() ,
    array(
         'type' => 'mechanical' ,
         'name' => 'Astro Boy' ,
         'year' => 1952
    )
);




