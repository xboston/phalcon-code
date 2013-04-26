<?php

class NewsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    /**
     * Это комментарий
     *
     * @Cache(lifetime=86400)
     */
    public function showAllAction()
    {
        $this->view->article = Articles::find();
    }

    /**
     * Это комментарий
     *
     * @Cache(key="my-key", lifetime=86400)
     */
    public function showAction($slug)
    {
        $this->view->article = Articles::findFirstByTitle($slug);
    }

}

