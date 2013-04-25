<?php
namespace Phalcon\Mvc\View{
    interface EngineInterface
    {
        public function __construct($view, $dependencyInjector = NULL);
        public function getContent();
        public function partial($partialPath);
        public function render($path, $params, $mustClean = NULL);
    }
}