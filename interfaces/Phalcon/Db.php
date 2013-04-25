<?php
namespace Phalcon;
interface Db
{
    const FETCH_ASSOC = 1;
    const FETCH_BOTH = 2;
    const FETCH_NUM = 3;
    const FETCH_OBJ = 4;
    public static function setup($options);
}