<?php
namespace Phalcon\Http{
    abstract class Request implements \Phalcon\Http\RequestInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function get($name, $filters = NULL, $defaultValue = NULL){}
        public function getPost($name, $filters = NULL, $defaultValue = NULL){}
        public function getQuery($name, $filters = NULL, $defaultValue = NULL){}
        public function getServer($name){}
        public function has($name){}
        public function hasPost($name){}
        public function hasQuery($name){}
        public function hasServer($name){}
        public function getHeader($header){}
        public function getScheme(){}
        public function isAjax(){}
        public function isSoapRequested(){}
        public function isSecureRequest(){}
        public function getRawBody(){}
        public function getServerAddress(){}
        public function getServerName(){}
        public function getHttpHost(){}
        public function getClientAddress($trustForwardedHeader = NULL){}
        public function getMethod(){}
        public function getUserAgent(){}
        public function isMethod($methods){}
        public function isPost(){}
        public function isGet(){}
        public function isPut(){}
        public function isPatch(){}
        public function isHead(){}
        public function isDelete(){}
        public function isOptions(){}
        public function hasFiles(){}
        public function getUploadedFiles(){}
        public function getHTTPReferer(){}
        public function _getQualityHeader(){}
        public function _getBestQuality(){}
        public function getAcceptableContent(){}
        public function getBestAccept(){}
        public function getClientCharsets(){}
        public function getBestCharset(){}
        public function getLanguages(){}
        public function getBestLanguage(){}
    }
}