<?php

/**
 * Скрипт формирует файлы примеров для компонентов
 *
 *
 * php scripts/gen-examples.php
 */

define('ROOT_DIR' , '/home/boston/www/phalcon-docs/en/api');

$version        = \Phalcon\Version::get();
$versionPieces  = explode(' ' , $version);
$phalconVersion = $versionPieces[0];

define('EXAMPLES_DIR' , sprintf("%s/%s/%s" , dirname(__DIR__) , 'examples' , $phalconVersion));

class ExamplesGenerator
{

    protected $_docs = array();

    public function __construct($directory)
    {
        $this->_scanSources($directory);
    }

    protected function _scanSources($directory)
    {
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory , FilesystemIterator::SKIP_DOTS));

        foreach ( $iterator as $item ) {

            if ( $item->getExtension() == 'rst' ) {

                $file = $item->getPathname();

                $fileName      = basename($file);
                $componentName = str_replace('.rst' , '' , $fileName);

                $locationExamples = EXAMPLES_DIR .  str_replace(ROOT_DIR , '' , dirname($file)) . '/' . $componentName;

                is_dir($locationExamples) ? : mkdir($locationExamples , 0777 , true);

                $fileNull = sprintf("%s/%s.php" , $locationExamples , $componentName);
                is_file($fileNull) ? null : touch($fileNull);

                echo sprintf("%s-ok\n" , $file);
            }
        }
    }
}

$api = new ExamplesGenerator(ROOT_DIR);