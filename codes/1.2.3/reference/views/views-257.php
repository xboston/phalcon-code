<?php

use Phalcon\Mvc\Controller,
    Phalcon\Mvc\View;

class PostsController extends Controller
{

    public function indexAction()
    {

    }

    public function findAction()
    {

        // This is an Ajax response so it doesn't generate any kind of view
        $this->view->setRenderLevel(View::LEVEL_NO_RENDER);

        //...
    }

    public function showAction($postId)
    {
        // Shows only the view related to the action
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

}

