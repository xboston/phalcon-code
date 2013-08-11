<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        //Render 'views-dir/index.phtml'
        echo $this->view->render('index');

        //Render 'views-dir/posts/show.phtml'
        echo $this->view->render('posts/show');

        //Render 'views-dir/index.phtml' passing variables
        echo $this->view->render('index', array('posts' => Posts::find()));

        //Render 'views-dir/posts/show.phtml' passing variables
        echo $this->view->render('posts/show', array('posts' => Posts::find()));
    }

}

