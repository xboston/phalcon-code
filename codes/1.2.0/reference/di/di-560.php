<?php

namespace SomeApp;

use Phalcon\Http\Response;

class SomeComponent
{

    protected $_response;

    protected $_someFlag;

    public function __construct(Response $response , $someFlag)
    {
        $this->_response = $response;
        $this->_someFlag = $someFlag;
    }

}

