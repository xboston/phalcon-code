<?php
namespace Phalcon\Http{

    abstract class Response implements \Phalcon\Http\ResponseInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($content = NULL, $code = NULL, $status = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setStatusCode($code, $message){}
        public function setHeaders($headers){}
        public function getHeaders(){}
        public function setCookies($cookies){}
        public function getCookies(){}
        public function setHeader($name, $value){}
        public function setRawHeader($header){}
        public function resetHeaders(){}
        public function setExpires($datetime){}
        public function setNotModified(){}
        public function setContentType($contentType, $charset = NULL){}
        public function setEtag($etag){}
        public function redirect($location = NULL, $externalRedirect = NULL, $statusCode = NULL){}
        public function setContent($content){}
        public function setJsonContent($content, $jsonOptions = NULL){}
        public function appendContent($content){}
        public function getContent(){}
        public function isSent(){}
        public function sendHeaders(){}
        public function sendCookies(){}
        public function send(){}
        public function setFileToSend($filePath, $attachmentName = NULL){}
    }
}