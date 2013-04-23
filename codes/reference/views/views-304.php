<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function findAction()
    {

        // Ajax-ответ, генерация представления не нужна
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);

        //...
    }

    public function showAction($postId)
    {
        // Показать только представление, относящееся к конкретному действию контроллера
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
    }

}

