<?php

class NewsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    /**
     * This is a comment
     *
     * @Cache(lifetime=86400)
     */
    public function showAllAction()
    {
        $this->view->article = Articles::find();
    }

    /**
     * This is a comment
     *
     * @Cache(key="my-key", lifetime=86400)
     */
    public function showAction($slug)
    {
        $this->view->article = Articles::findFirstByTitle($slug);
    }

}

