<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function showAction()
    {
        //Cache the view using the default settings
        $this->view->cache(true);
    }

    public function showArticleAction()
    {
        // Cache this view for 1 hour
        $this->view->cache(array(
            "lifetime" => 3600
        ));
    }

    public function resumeAction()
    {
        //Cache this view for 1 day with the key "resume-cache"
        $this->view->cache(
            array(
                "lifetime" => 86400,
                "key"      => "resume-cache",
            )
        );
    }

    public function downloadAction()
    {
        //Passing a custom service
        $this->view->cache(
            array(
                "service"  => "myCache",
                "lifetime" => 86400,
                "key"      => "resume-cache",
            )
        );
    }

}

