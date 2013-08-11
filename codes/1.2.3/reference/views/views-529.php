<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction()
    {
        //Pass all the posts to the views
        $this->view->setVar("posts", Posts::find());

        //Using the magic setter
        $this->view->posts = Posts::find();

        //Passing more than one variable at the same time
        $this->view->setVars(array(
            'title' => $post->title,
            'content' => $post->content
        ));
    }

}

