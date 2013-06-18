<?php
namespace Phalcon\Mvc{

    interface UrlInterface
    {
        public function setBaseUri($baseUri);
        public function getBaseUri();
        public function setBasePath($basePath);
        public function getBasePath();
        public function get($uri = NULL);
        public function path($path = NULL);
    }
}