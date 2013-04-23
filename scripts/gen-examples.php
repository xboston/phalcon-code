<?php

/**
 * This scripts generates the restructuredText for the class API.
 *
 * Change the CPHALCON_DIR constant to point to the dev/ directory in the Phalcon source code
 *
 * php scripts/gen-examples.php
 */

define('ROOT_DIR' , '/home/boston/www/phalcon-docs/ru/');
define('EXAMPLES_DIR' , dirname(__DIR__) . '/examples');

class API_Generator
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

        $startLine = 0;
        $thisCode  = false;
        $codes     = [ ];

        foreach ( file($file) as $lineNum => $line ) {
            $lineNum += 1;

            if ( trim($line) == '.. code-block:: php' ) {

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

        $fileName = basename($file);

        $componentName = str_replace('.rst' , '' , $fileName);
        $location      = EXAMPLES_DIR . '/' . str_replace(ROOT_DIR , '' , dirname($file)) . '/' . $componentName;

        foreach ( $codes as $line => $code ) {

            $file = sprintf("%s/%s-%s.php" , $location , $fileName , $line);
            is_dir($location) ? : mkdir($location , 0777 , true);
            file_put_contents($file , $code);
            echo sprintf("%s-ok\n",$fileName);
        }
    }
}

$api = new API_Generator(ROOT_DIR);