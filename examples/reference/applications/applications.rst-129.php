
    <?php

    namespace Multiple\Backend;

    use Phalcon\Mvc\ModuleDefinitionInterface;

    class Module implements ModuleDefinitionInterface
    {

        /**
         * Регистрация автозагрузчика, специфичного для текущего модуля
         */
        public function registerAutoloaders()
        {

            $loader = new \Phalcon\Loader();

            $loader->registerNamespaces(
                array(
                    'Multiple\Backend\Controllers' => '../apps/backend/controllers/',
                    'Multiple\Backend\Models'      => '../apps/backend/models/',
                )
            );

            $loader->register();
        }

        /**
         * Регистрация специфичных сервисов для модуля
         */
        public function registerServices($di)
        {

            // Регистрация диспетчера
            $di->set('dispatcher', function() {
                $dispatcher = new \Phalcon\Mvc\Dispatcher();
                $dispatcher->setDefaultNamespace("Multiple\Backend\Controllers\\");
                return $dispatcher;
            });

            // Регистрация компонента представлений
            $di->set('view', function() {
                $view = new \Phalcon\Mvc\View();
                $view->setViewsDir('../apps/backend/views/');
                return $view;
            });
        }

    }

