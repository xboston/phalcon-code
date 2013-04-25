<?php
namespace Phalcon\Mvc\View\Engine\Volt{

    abstract class Compiler implements \Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($view = NULL){}
        public function setOptions($options){}
        public function getOptions(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function addFunction($name, $definition){}
        public function getFunctions(){}
        public function addFilter($name, $definition){}
        public function getFilters(){}
        public function setUniquePrefix($prefix){}
        public function getUniquePrefix(){}
        public function attributeReader($expr){}
        public function functionCall($expr){}
        public function resolveTest($test, $left){}
        protected function resolveFilter(){}
        public function expression($expr){}
        protected function _statementListOrExtends(){}
        public function compileForeach($statement, $extendsMode = NULL){}
        public function compileForElse(){}
        public function compileIf($statement, $extendsMode = NULL){}
        public function compileElseIf($statement){}
        public function compileCache($statement, $extendsMode = NULL){}
        public function compileEcho($statement){}
        public function compileInclude($statement){}
        public function compileSet($statement){}
        public function compileDo($statement){}
        public function compileAutoEscape($statement, $extendsMode){}
        protected function _statementList(){}
        protected function _compileSource(){}
        public function compileString($viewCode, $extendsMode = NULL){}
        public function compileFile($path, $compiledPath, $extendsMode = NULL){}
        public function compile($templatePath, $extendsMode = NULL){}
        public function getTemplatePath(){}
        public function getCompiledTemplatePath(){}
        public function parse($viewCode){}
    }
}