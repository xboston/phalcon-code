<?php

class DownloadController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

        //Check whether the cache with key "downloads" exists or has expired
        if ( $this->view->getCache()->exists('downloads') ) {

            //Query the latest downloads
            $latest = Downloads::find(
                array(
                     'order' => 'created_at DESC'
                )
            );

            $this->view->setVar('latest' , $latest);
        }

        //Enable the cache with the same key "downloads"
        $this->view->cache(
            array(
                 'key' => 'downloads'
            )
        );
    }

}

