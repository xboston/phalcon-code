<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public $settings;

    public function initialize()
    {
        $this->settings = array(
            "mySetting" => "value"
        );
    }

    public function saveAction()
    {
        if ( $this->settings["mySetting"] == "value" ) {
            //...
        }
    }

}

