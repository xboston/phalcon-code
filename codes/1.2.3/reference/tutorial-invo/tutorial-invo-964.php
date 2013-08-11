<?php

class ControllerBase extends Phalcon\Mvc\Controller
{

    protected function initialize()
    {
        //Prepend the application name to the title
        $this->tag->prependTitle('INVO | ');
    }

    //...
}

