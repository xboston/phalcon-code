<?php

class Security extends Phalcon\Mvc\User\Component
{

    public function auth()
    {
        // Создаётся постоянная (persistent) переменная "name"
        $this->persistent->name = "Laura";
    }

    public function getAuthName()
    {
        return $this->persistent->name;
    }

}

