
    <?php

    class FilesController extends \Phalcon\Mvc\Controller
    {

        public function saveAction()
        {

            // Прямой доступ по имени, используя его как свойство
            $this->storage->save('/some/file');

            // С использованием сервиса DI
            $this->di->get('storage')->save('/some/file');

            // Используя магический метод
            $this->di->getStorage()->save('/some/file');

            // Еще больше магических методов для получения всей цепочки
            $this->getDi()->getStorage()->save('/some/file');

            // Используя синтаксис работы с массивами
            $this->di['storage']->save('/some/file');
        }

    }

