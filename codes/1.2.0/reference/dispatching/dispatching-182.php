<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        // Get the post's title passed in the URL as parameter
        $title = $this->dispatcher->getParam("title");

        // Get the post's year passed in the URL as parameter
        // also filtering it
        $year = $this->dispatcher->getParam("year" , "int");
    }

}

