<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function beforeExecuteRoute($dispatcher)
    {
        // This is executed before every found action

        if ( $dispatcher->getActionName() == 'save' ) {

            $this->flash->error("You don't have permission to save posts");

            $this->dispatcher->forward(
                array(
                     'controller' => 'home' ,
                     'action'     => 'index'
                )
            );

            return false;
        }
    }

    public function afterExecuteRoute($dispatcher)
    {
        // Executed after every found action
    }

}

