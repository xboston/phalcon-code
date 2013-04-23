<?php

class RobotsSimilar extends Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->belongsTo('robots_id', 'Robots', 'id');
        $this->belongsTo('similar_robots_id', 'Robots', 'id');
    }

}

