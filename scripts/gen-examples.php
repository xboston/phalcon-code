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

define('EXAMPLES_ROOT' , sprintf("%s/%s" , dirname(__DIR__) , 'examples'));
define('EXAMPLES_DIR' , sprintf("%s/%s" , EXAMPLES_ROOT , $phalconVersion));

class ExamplesGenerator
{

    protected $_docs = array();
    private $template;

    public function __construct($directory)
    {
        $this->template = file_get_contents(EXAMPLES_ROOT . '/template.php');
        $this->_scanSources($directory);
    }

    protected function _scanSources($directory)
    {
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory , FilesystemIterator::SKIP_DOTS));

        foreach ( $iterator as $item ) {

            $file = $item->getPathname();

            if ( $item->getExtension() == 'rst' && !strpos($file , 'Interface') && !strpos($file , 'index') ) {

                $this->createFile($file);
            }
        }
    }

    private function  createFile($file)
    {
        $fileName      = basename($file);
        $componentName = str_replace('.rst' , '' , $fileName);

        $locationExamples = EXAMPLES_DIR;

        is_dir($locationExamples) ? : mkdir($locationExamples , 0777 , true);

        $fileNull = sprintf("%s/%s.php" , $locationExamples , $componentName);

        if ( !is_file($fileNull) ) {

            $componentClass = str_replace('_' , '\\' , $componentName);
            $fileBody       = str_replace('{ClassName}' , $componentClass , $this->template);

            file_put_contents($fileNull , $fileBody);
        }

        echo sprintf("%s-ok\n" , $file);

    }

}

$api = new ExamplesGenerator(ROOT_DIR);