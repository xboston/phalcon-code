<?php

use Phalcon\Mvc\Model\Behavior,
    Phalcon\Mvc\Model\BehaviorInterface;

class Sluggable extends Behavior implements BehaviorInterface
{

    public function missingMethod($model, $method, $arguments=array())
    {
        // if the method is 'getSlug' convert the title
        if ($method == 'getSlug') {
            return Phalcon\Tag::friendlyTitle($model->title);
        }
    }

}

