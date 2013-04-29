<?php

class DocumentationController extends \Phalcon\Mvc\Controller
{

    public function showAction()
    {

        // Возвращает параметр "name"
        $year = $this->dispatcher->getParam("name");

        // Возвращает параметр "type"
        $year = $this->dispatcher->getParam("type");

    }

}

