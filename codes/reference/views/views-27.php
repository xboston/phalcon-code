<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction($postId)
    {
        // Передать параметр $postId в представление
        $this->view->setVar("postId", $postId);
    }

}

