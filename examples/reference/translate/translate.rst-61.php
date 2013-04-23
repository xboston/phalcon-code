
    <?php

    class UserController extends \Phalcon\Mvc\Controller
    {

      protected function _getTranslation()
      {

        // Получение оптимального языка из браузера
        $language = $this->request->getBestLanguage();

        // Проверка существования перевода для полученного языка
        if (file_exists("app/messages/".$language.".php")) {
           require "app/messages/".$language.".php";
        } else {
           // Переключение на язык по умолчанию
           require "app/messages/en.php";
        }

        // Возвращение объекта работы с переводом
        return new \Phalcon\Translate\Adapter\NativeArray(array(
           "content" => $messages
        ));

      }

      public function indexAction()
      {
        $this->view->setVar("name", "Mike");
        $this->view->setVar("t", $this->_getTranslation());
      }

    }

