<?php

$reader = new \Phalcon\Annotations\Adapter\Memory();

//Reflect the annotations in the class Example
$reflector = $reader->get('Example');

//Read the annotations in the class' docblock
$annotations = $reflector->getClassAnnotations();

//Traverse the annotations
foreach ($annotations as $annotation) {

    //Print the annotation name
    echo $annotation->getName(), PHP_EOL;

    //Print the number of arguments
    echo $annotation->numberArguments(), PHP_EOL;

    //Print the arguments
    print_r($annotation->getArguments());
}

