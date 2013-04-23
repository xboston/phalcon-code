<?php

public function initialize()
{
    $this->addBehavior(new Timestampable(
        array(
            'beforeCreate' => array(
                'field' => 'created_at',
                'format' => 'Y-m-d'
            )
        )
    ));
}

