
    <?php

    class PostsController extends \Phalcon\Mvc\Controller
    {
    
    	public function uploadAction()
    	{
    		//Check if the user has uploaded files
    		if ($this->request->hasFiles() == true) {
    			//Print the real file names and their sizes
    			foreach ($this->request->getUploadedFiles() as $file){
    				echo $file->getName(), " ", $file->getSize(), "\n";
    			}
    		}
    	}
    
    }



