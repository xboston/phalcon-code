<?php

class PostsController extends \Phalcon\Mvc\Controller
{
    /**
     * Shows posts
     *
     * @param \Posts $post
     */
    public function showAction(Posts $post)
    {
        $this->view->post = $post;
    }
}

