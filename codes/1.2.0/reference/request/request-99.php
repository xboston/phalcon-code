<?php

use Phalcon\Mvc\Controller;

class PostsController extends Controller
{

    public function uploadAction()
    {
        // Check if the user has uploaded files
        if ($this->request->hasFiles() == true) {

            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {

                //Print file details
                echo $file->getName(), " ", $file->getSize(), "\n";

                //Move the file into the application
                $file->moveTo('files/' . $file->getName());
            }
        }
    }

}

