<?php

class PostsController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
        $this->view->setTemplateAfter('common');
    }

    public function lastAction()
    {
        $this->flash->notice("These are the latest posts");
    }
}

