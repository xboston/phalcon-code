<?php
namespace Phalcon\Flash;
interface Session extends \Phalcon\FlashInterface,\Phalcon\DI\InjectionAwareInterface
{
    public function setDI($dependencyInjector);
    public function getDI();
    public function _getSessionMessages();
    public function _setSessionMessages();
    public function message($type, $message);
    public function getMessages($type = NULL, $remove = NULL);
    public function output($remove = NULL);
    public function __construct($cssClasses = NULL);
    public function setImplicitFlush($implicitFlush);
    public function setAutomaticHtml($automaticHtml);
    public function setCssClasses($cssClasses);
    public function error($message);
    public function notice($message);
    public function success($message);
    public function warning($message);
    public function outputMessage($type, $message);
}