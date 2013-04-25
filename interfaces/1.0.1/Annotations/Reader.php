<?php
namespace Phalcon\Annotations{
    abstract class Reader implements \Phalcon\Annotations\ReaderInterface
    {
        public function parse($className){}
        public static function parseDocBlock($docBlock, $file = NULL, $line = NULL){}
    }
}