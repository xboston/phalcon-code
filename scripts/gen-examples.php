<?php

/**
 * Скрипт формирует файлы из встречающихся в документации участков кода
 *
 *
 * php scripts/gen-examples.php
 */

define('ROOT_DIR' , '/home/boston/www/phalcon-docs/ru/');

$version = \Phalcon\Version::get();
$versionPieces = explode(' ', $version);
$phalconVersion = $versionPieces[0];

define('CODES_DIR' , sprintf("%s/%s/%s" , dirname(__DIR__) , 'codes' , $phalconVersion));
define('EXAMPLES_DIR' , sprintf("%s/%s/%s" , dirname(__DIR__) , 'examples' , $phalconVersion));

class CodeExampleGenerator
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

                $this->_getCode($item->getPathname());
                echo sprintf("%s-ok\n" , $item->getPathname() );
            }
        }
    }

    protected function _getCode($file)
    {

        $startLine  = 0;
        $thisCode   = false;
        $codes      = [ ];
        $createFile = false;

        foreach ( file($file) as $lineNum => $line ) {
            $lineNum += 1;

            if ( trim($line) == '.. code-block:: php' || trim($line) == '.. code-block:: html+php' ) {

                $createFile = true;

                $thisCode          = true;
                $startLine         = $lineNum;
                $codes[$startLine] = '';
            }

            if ( $thisCode == true && ($line{0} == ' ' || $line{0} == "\t" || $line{0} == " " || trim($line) == '' || trim($line) == '.. code-block:: php' || trim(
                $line
            ) == '.. code-block:: html+php')
            ) {

                if ( trim($line) != '.. code-block:: php' && trim($line) != '.. code-block:: html+php' ) {

                    $line = rtrim($line , ' ');
                    $line = str_replace("\t" , '    ' , $line);
                    $line = preg_replace("/^ {4}/" , '' , $line);

                    $codes[$startLine] .= $line;
                }

            } else {

                $thisCode = false;
            }
        }

        if ( $createFile == false ) {

            return;
        }

        $fileName      = basename($file);
        $componentName = str_replace('.rst' , '' , $fileName);

        $locationCodes    = CODES_DIR . '/' . str_replace(ROOT_DIR , '' , dirname($file)) . '/' . $componentName;
        $locationExamples = EXAMPLES_DIR . '/' . str_replace(ROOT_DIR , '' , dirname($file)) . '/' . $componentName;

        is_dir($locationCodes) ? : mkdir($locationCodes , 0777 , true);
        is_dir($locationExamples) ? : mkdir($locationExamples , 0777 , true);

        $fileNull = sprintf("%s/%s.php" , $locationExamples , $componentName);
        is_file($fileNull) ? null : touch($fileNull);

        foreach ( $codes as $line => $code ) {


            $code = ltrim($code , "\n");
            $file = sprintf("%s/%s-%s.php" , $locationCodes , $componentName , $line);

            file_put_contents($file , $code);
        }
    }
}

$api = new CodeExampleGenerator(ROOT_DIR);