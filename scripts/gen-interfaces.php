<?php

/**
 * Скрипт формирует файлы из существующих интерфейсов Phalcon
 *
 *
 * php scripts/gen-interfaces.php
 */

namespace com\github\gooh\InterfaceDistiller;

include __DIR__ . '/InterfaceDistiller/autoload.php';

$phalconVersion = \Phalcon\Version::get();
define('EXAMPLES_DIR' , sprintf("%s/%s/%s" , dirname(__DIR__) , 'interfaces' , $phalconVersion));

$phalconClasses = new \RegexIterator(new \ArrayIterator(get_declared_interfaces()) , '/^Phalcon/');

foreach ( $phalconClasses as $phalconClass ) {

    $reflector = new \ReflectionClass($phalconClass);

    $distillate = new Distillate();
    $distillate->setInterfaceName($phalconClass);

    $distillate->setExtendingInterfaces(

        implode(',\\' , $reflector->getInterfaceNames())
    );

    $parentClass = $reflector->getParentClass();
    if ( $parentClass ) {

        $distillate->addParentClass($reflector->getParentClass()->getName());
    }

    $methodIterator = new \ArrayIterator($reflector->getMethods());
    foreach ( $methodIterator as $method ) {

        $distillate->addMethod($method);
    }

    $consts = $reflector->getConstants();
    $distillate->addConsts($consts);

    $fileName = sprintf('%s/%s.php' , EXAMPLES_DIR , str_replace('\\' , '/' , $phalconClass));
    $fileName = str_replace('/Phalcon/' , '/' , $fileName);
    $dirName  = dirname($fileName);
    is_dir($dirName) ? : mkdir($dirName , 0777 , true);

    $file = new \SplFileObject($fileName , 'w');
    //$file   = new \SplTempFileObject( );
    $writer = new Distillate\Writer($file,true);
    $writer->writeToFile($distillate);
    $file->rewind();
    $file->fpassthru();

    echo $fileName . PHP_EOL;
}