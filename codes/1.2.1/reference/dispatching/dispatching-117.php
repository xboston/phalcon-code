<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction($year, $postTitle)
    {

        // .. store some product and forward the user

        // Forward flow to the index action
        $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "index"
        ));
    }

}

