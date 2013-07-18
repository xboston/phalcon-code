<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        // Set the engine
        $this->view->registerEngines(
            array(
                 ".my-html" => "MyTemplateAdapter"
            )
        );
    }

    public function showAction()
    {
        // Using more than one template engine
        $this->view->registerEngines(
            array(
                 ".my-html" => 'MyTemplateAdapter' ,
                 ".phtml"   => 'Phalcon\Mvc\View\Engine\Php'
            )
        );
    }

}

