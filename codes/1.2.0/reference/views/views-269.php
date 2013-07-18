<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction()
    {
        //Pass all the posts to the views
        $this->view->setVar("posts" , Posts::find());
    }

}

