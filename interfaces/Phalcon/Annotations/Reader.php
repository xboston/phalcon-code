<?php
namespace Phalcon\Annotations;
interface Reader extends \Phalcon\Annotations\ReaderInterface
{
    public function parse($className);
    public static function parseDocBlock($docBlock, $file = NULL, $line = NULL);
}