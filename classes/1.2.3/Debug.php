<?php
namespace Phalcon{

    abstract class Debug
    {
        public function setUri($uri){}
        public function setShowBackTrace($showBackTrace){}
        public function setShowFiles($showFiles){}
        public function setShowFileFragment($showFileFragment){}
        public function listen($exceptions = NULL, $lowSeverity = NULL){}
        public function listenExceptions(){}
        public function listenLowSeverity(){}
        public function debugVar($var, $key = NULL){}
        public function clearVars(){}
        protected function _escapeString(){}
        protected function _getArrayDump(){}
        protected function _getVarDump(){}
        public function getMajorVersion(){}
        public function getVersion(){}
        public function getCssSources(){}
        public function getJsSources(){}
        protected function showTraceItem(){}
        public function onUncaughtException($exception){}
    }
}