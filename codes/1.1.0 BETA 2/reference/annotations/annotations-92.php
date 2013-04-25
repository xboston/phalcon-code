<?php

$reader = new \Phalcon\Annotations\Adapter\Memory();

//Отразить аннотации в классе Example
$reflector = $reader->get('Example');

//Прочесть аннотации в блоке документации класса
$annotations = $reflector->getClassAnnotations();

//Произвести обход всех аннотаций
foreach ($annotations as $annotation) {

    //Вывести название аннотации
    echo $annotation->getName(), PHP_EOL;

    //Вывести количество аргументов
    echo $annotation->numberArguments(), PHP_EOL;

    //Вывести аргументы
    print_r($annotation->getArguments());
}

