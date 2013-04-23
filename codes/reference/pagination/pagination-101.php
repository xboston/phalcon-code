
    <?php

    class MyPaginator implements Phalcon\Paginator\AdapterInterface  {

        /**
         * Конструктор адаптера
         *
         * @param array $config
         */
        public function __construct($config);

        /**
         * Установка текущей страницы
         *
         * @param int $page
         */
        public function setCurrentPage($page);

        /**
         * Возвращает срез данных для вывода
         *
         * @return stdClass
         */
        public function getPaginate();

    }