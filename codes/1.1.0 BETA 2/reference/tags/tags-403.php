<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function initialize()
    {
        Phalcon\Tag::setTitle(" Суперсайт");
    }

    public function indexAction()
    {
        Phalcon\Tag::prependTitle("Главная страница - ");
    }

}

