<?php

class FeedController extends Phalcon\Mvc\Controller
{

    public function getAction()
    {
        // Getting a response instance
        $response = new \Phalcon\Http\Response();

        $feed = //.. load here the feed

            //Set the content of the response
            $response->setContent($feed->asString());

        //Return the response
        return $response;
    }

}

