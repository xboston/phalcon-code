<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction($year, $postTitle)
    {

        // .. сохраняем данные и перенаправляем пользователя

        // Перенаправляем на действие index 
        $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "index"
        ));
    }

}

