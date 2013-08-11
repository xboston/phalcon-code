<?php

class PeopleController extends \Phalcon\Mvc\Controller
{

  //This action will be executed by default
  public function indexAction()
  {

  }

  public function findAction()
  {

  }

  public function saveAction()
  {
   //Forwards flow to the index action
   return $this->dispatcher->forward(array('controller' => 'people', 'action' => 'index'));
  }

}



