<?php

use Phalcon\Mvc\View , Phalcon\Mvc\Controller;

class PostsController extends Controller
{

    public function indexAction()
    {

    }

    public function findAction()
    {
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }

}

