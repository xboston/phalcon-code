<?php
namespace Phalcon\CLI;
interface Router extends \Phalcon\DI\InjectionAwareInterface
{
    public function __construct();
    public function setDI($dependencyInjector);
    public function getDI();
    public function setDefaultModule($moduleName);
    public function setDefaultTask($taskName);
    public function setDefaultAction($actionName);
    public function handle($arguments = NULL);
    public function getModuleName();
    public function getTaskName();
    public function getActionName();
    public function getParams();
}