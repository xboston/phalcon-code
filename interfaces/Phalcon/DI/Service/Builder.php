<?php
namespace Phalcon\DI\Service{
    abstract class Builder
    {
        protected function _buildParameter(){}
        protected function _buildParameters(){}
        public function build($dependencyInjector, $definition, $parameters = NULL){}
    }
}