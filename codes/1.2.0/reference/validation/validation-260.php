<?php

use Phalcon\Validation;

class LoginValidation extends Validation
{

    public function initialize()
    {
        // ...
    }

    /**
     * Executed before validation
     *
     * @param array                            $data
     * @param object                           $entity
     * @param Phalcon\Validation\Message\Group $messages
     */
    public function beforeValidation($data , $entity , $messages)
    {
        if ( $this->request->getHttpHost() != 'admin.mydomain.com' ) {
            $messages->appendMessage(new Message('Users only can log on in the administration domain'));

            return false;
        }

        return true;
    }

    /**
     * Executed after validation
     *
     * @param array                            $data
     * @param object                           $entity
     * @param Phalcon\Validation\Message\Group $messages
     */
    public function afterValidation($data , $entity , $messages)
    {
        //... add additional messages or perform more validations
    }

}

