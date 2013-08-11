<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function initialize()
    {
        $this->tag->setTitle("Your Website");
    }

    public function indexAction()
    {
        $this->tag->prependTitle("Index of Posts - ");
    }

}

