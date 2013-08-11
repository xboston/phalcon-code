<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function saveAction()
    {

        //Obtain the TransactionsManager from the services container
        $manager = $this->di->getTransactions();

        //Or
        $manager = $this->transactions;

        //Request a transaction
        $transaction = $manager->get();

        //...
    }

}

