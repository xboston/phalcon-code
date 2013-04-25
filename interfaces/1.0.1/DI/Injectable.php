<?php
namespace Phalcon\DI{
    class Injectable implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface
    {

        /**
         * @var \Phalcon\Mvc\View
         */
        public $view;

        /**
         * @var \Phalcon\Mvc\Router
         */
        public $router;

        /**
         * @var \Phalcon\Mvc\Dispatcher
         */
        public $dispatcher;

        /**
         * @var \Phalcon\Mvc\Url
         */
        public $url;

        /**
         * @var \Phalcon\Di
         */
        public $di;

        /**
         * @var \Phalcon\HTTP\Request
         */
        public $request;

        /**
         * @var \Phalcon\HTTP\Response
         */
        public $response;

        /**
         * @var \Phalcon\Flash\Direct
         */
        public $flash;

        /**
         * @var \Phalcon\Flash\Session
         */
        public $flashSession;

        /**
         * @var \Phalcon\Session\Adapter
         */
        public $session;

        /**
         * @var \Phalcon\Session\Bag
         */
        public $persistent;

        /**
         * @var \Phalcon\Mvc\Model\Manager
         */
        public $modelsManager;

        /**
         * @var \Phalcon\Mvc\Model\Metadata
         */
        public $modelsMetadata;

        /**
         * @var \Phalcon\Mvc\Model\Transaction\Manager
         */
        public $transactionManager;

        /**
         * @var \Phalcon\Filter
         */
        public $filter;

        /**
         * @var \Phalcon\Security
         */
        public $security;

        /**
         * @var \Phalcon\Annotations\Adapter\Memory
         */
        public $annotations;

        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function __get($propertyName){}
    }
}