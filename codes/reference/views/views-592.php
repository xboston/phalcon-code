
    <?php

    class MyTemplateAdapter extends \Phalcon\Mvc\View\Engine
    {

        /**
         * Конструктор адаптера
         *
         * @param \Phalcon\Mvc\View $view
         * @param \Phalcon\DI $di
         */
        public function __construct($view, $di)
        {
            // Инициализация адаптера
            parent::__construct($view, $di);
        }

        /**
         * Отрисовывает представление с помощью шаблонизатора
         *
         * @param string $path
         * @param array $params
         */
        public function render($path, $params)
        {

            // Доступ к view
            $view = $this->_view;

            // Доступ к настройкам
            $options = $this->_options;

            //Render the view
            //...
        }

    }

