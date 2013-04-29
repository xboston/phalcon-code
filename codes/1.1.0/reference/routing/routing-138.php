<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction()
    {

        // Return "year" parameter
        $year = $this->dispatcher->getParam("year");

        // Return "month" parameter
        $month = $this->dispatcher->getParam("month");

        // Return "day" parameter
        $day = $this->dispatcher->getParam("day");

    }

}

