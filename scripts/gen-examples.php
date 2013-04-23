<?php

/**
 * This scripts generates the restructuredText for the class API.
 *
 * Change the CPHALCON_DIR constant to point to the dev/ directory in the Phalcon source code
 *
 * php scripts/gen-examples.php
 */

define('ROOT_DIR' , '/home/boston/www/phalcon-docs/ru/');
define('CODES_DIR' , dirname(__DIR__) . '/codes');
define('EXAMPLES_DIR' , dirname(__DIR__) . '/examples');

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

            if ( trim($line) == '.. code-block:: php' ) {

                $createFile = true;

                $thisCode          = true;
                $startLine         = $lineNum;
                $codes[$startLine] = '';
            }

            if ( $thisCode == true && ($line{0} == ' ' || $line{0} == "\t" || $line{0} == " " || trim($line) == '' || trim($line) == '.. code-block:: php') ) {

                if ( trim($line) != '.. code-block:: php' ) {

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
        touch($fileNull);


        foreach ( $codes as $line => $code ) {

            $file = sprintf("%s/%s-%s.php" , $locationCodes , $componentName , $line);

            file_put_contents($file , $code);
            echo sprintf("%s-ok\n" , $fileName);
        }
    }
}

$api = new CodeExampleGenerator(ROOT_DIR);