<?php

class DocumentationController extends \Phalcon\Mvc\Controller
{

    public function showAction()
    {

        // Returns "name" parameter
        $name = $this->dispatcher->getParam("name");

        // Returns "type" parameter
        $type = $this->dispatcher->getParam("type");

    }

}

