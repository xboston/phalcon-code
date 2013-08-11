<?php
namespace Phalcon{

    abstract class Kernel
    {
        public static function preComputeHashKey($arrKey){}
        public static function preComputeHashKey32($arrKey){}
        public static function preComputeHashKey64($arrKey){}
    }
}