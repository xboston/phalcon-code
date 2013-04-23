
    <?php

    namespace SomeApp;

    use Phalcon\Http\Response;

    class SomeComponent
    {

        protected $_response;

        protected $_someFlag;

        public function setResponse(Response $response)
        {
            $this->_response = $response;
        }

        public function setFlag($someFlag)
        {
            $this->_someFlag = $someFlag;
        }

    }

