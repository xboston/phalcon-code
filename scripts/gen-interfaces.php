<?php

/**
 * Скрипт формирует файлы из существующих интерфейсов Phalcon
 *
 *
 * php scripts/gen-interfaces.php
 */

namespace com\github\gooh\InterfaceDistiller;

define('EXAMPLES_DIR' , dirname(__DIR__) . '/interfaces');

include __DIR__ . '/InterfaceDistiller/autoload.php';


$phalconClasses = new \RegexIterator(new \ArrayIterator(get_declared_classes()) , '/^Phalcon/');

foreach ( $phalconClasses as $phalconClass ) {

    //$phalconClass   = '\Phalcon\Mvc\View';
    
    $reflector      = new \ReflectionClass($phalconClass);
    $methodIterator = new \ArrayIterator($reflector->getMethods());
    $consts         = $reflector->getConstants();

    $distillate = new Distillate;
    //$distillate->setInterfaceName($reflector->getNamespaceName());
    $distillate->setInterfaceName($phalconClass);

    $distillate->setExtendingInterfaces(
        implode(',\\' , $reflector->getInterfaceNames())
    );

    $fileName = sprintf('%s/%s.php' , EXAMPLES_DIR , str_replace('\\' , '/' , $phalconClass));
    $dirName  = dirname($fileName);
    is_dir($dirName) ? : mkdir($dirName , 0777 , true);

    foreach ( $methodIterator as $method ) {
        $distillate->addMethod($method);
    }

    $distillate->addConsts($consts);


    $file = new \SplFileObject($fileName , 'w');
    //$file   = new \SplTempFileObject( );
    $writer = new Distillate\Writer($file);
    $writer->writeToFile($distillate);
    $file->rewind();
    $file->fpassthru();

    echo $fileName . PHP_EOL;
    //die;
}