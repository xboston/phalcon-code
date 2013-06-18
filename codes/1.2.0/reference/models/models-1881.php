<?php

public function initialize()
{
    $this->addBehavior(new Timestampable(
        array(
            'beforeCreate' => array(
                'field' => 'created_at',
                'format' => function() {
                    $datetime = new Datetime(new DateTimeZone('Europe/Stockholm'));
                    return $datetime->format('Y-m-d H:i:sP');
                }
            )
        )
    ));
}

