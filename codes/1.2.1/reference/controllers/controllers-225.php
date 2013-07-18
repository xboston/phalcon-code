<?php

class FilesController extends \Phalcon\Mvc\Controller
{

    public function saveAction()
    {

        //Injecting the service by just accessing the property with the same name
        $this->storage->save('/some/file');

        //Accessing the service from the DI
        $this->di->get('storage')->save('/some/file');

        //Another way to access the service using the magic getter
        $this->di->getStorage()->save('/some/file');

        //Another way to access the service using the magic getter
        $this->getDi()->getStorage()->save('/some/file');

        //Using the array-syntax
        $this->di['storage']->save('/some/file');
    }

}

