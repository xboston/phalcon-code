<?php

/**
 * Enables the cache for a view if the latest
 * executed action has the annotation @Cache
 */
class CacheEnablerPlugin extends \Phalcon\Mvc\User\Plugin
{

    /**
     * This event is executed before every route is executed in the dispatcher
     *
     */
    public function beforeExecuteRoute($event , $dispatcher)
    {

        //Parse the annotations in the method currently executed
        $annotations = $this->annotations->getMethod(
            $dispatcher->getActiveController() ,
            $dispatcher->getActiveMethod()
        );

        //Check if the method has an annotation 'Cache'
        if ( $annotations->has('Cache') ) {

            //The method has the annotation 'Cache'
            $annotation = $annotations->get('Cache');

            //Get the lifetime
            $lifetime = $annotation->getNamedParameter('lifetime');

            $options = array( 'lifetime' => $lifetime );

            //Check if there is an user defined cache key
            if ( $annotation->hasNamedParameter('key') ) {
                $options['key'] = $annotation->getNamedParameter('key');
            }

            //Enable the cache for the current method
            $this->view->cache($options);
        }

    }

}

