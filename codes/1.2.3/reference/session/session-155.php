<?php

class Security extends Phalcon\Mvc\User\Component
{

    public function auth()
    {
        // Create a persistent variable "name"
        $this->persistent->name = "Laura";
    }

    public function getAuthName()
    {
        return $this->persistent->name;
    }

}

