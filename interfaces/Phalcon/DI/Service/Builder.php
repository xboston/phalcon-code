<?php
namespace Phalcon\DI\Service;
interface Builder
{
    public function _buildParameter();
    public function _buildParameters();
    public function build($dependencyInjector, $definition, $parameters = NULL);
}