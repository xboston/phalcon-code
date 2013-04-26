<?php

class Robots extends \Phalcon\Mvc\Model
{

    public static function queryCache($initial, $final)
    {
        if ($initial >= 1 && $final < 10000) {
            return self::find(array(
                'id >= ' . $initial . ' AND id <= '.$final,
                'cache' => array('service' => 'mongo1')
            ));
        }
        if ($initial >= 10000 && $final <= 20000) {
            return self::find(array(
                'id >= ' . $initial . ' AND id <= '.$final,
                'cache' => array('service' => 'mongo2')
            ));
        }
        if ($initial > 20000) {
            return self::find(array(
                'id >= ' . $initial,
                'cache' => array('service' => 'mongo3')
            ));
        }
    }

}

