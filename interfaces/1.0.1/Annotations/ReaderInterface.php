<?php
namespace Phalcon\Annotations{
    interface ReaderInterface
    {
        public function parse($className);
        public static function parseDocBlock($docBlock, $file = NULL, $line = NULL);
    }
}