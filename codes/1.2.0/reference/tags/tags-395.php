<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function initialize()
    {
        Phalcon\Tag::setTitle("Your Website");
    }

    public function indexAction()
    {
        Phalcon\Tag::prependTitle("Index of Posts - ");
    }

}

