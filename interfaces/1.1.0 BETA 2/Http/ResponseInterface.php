<?php
namespace Phalcon\Http{
    interface ResponseInterface
    {
        public function setStatusCode($code, $message);
        public function getHeaders();
        public function setHeader($name, $value);
        public function setRawHeader($header);
        public function resetHeaders();
        public function setExpires($datetime);
        public function setNotModified();
        public function setContentType($contentType, $charset = NULL);
        public function redirect($location = NULL, $externalRedirect = NULL, $statusCode = NULL);
        public function setContent($content);
        public function appendContent($content);
        public function getContent();
        public function sendHeaders();
        public function send();
    }
}