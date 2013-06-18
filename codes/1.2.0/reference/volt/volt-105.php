<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function showAction()
    {

        $post = Post::findFirst();

        $this->view->title = $post->title;
        $this->view->post = $post;
        $this->view->menu = Menu::find();
        $this->view->show_navigation = true;

    }

}

