<?php

use Phalcon\Mvc\View;

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function findAction()
    {
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }

}

