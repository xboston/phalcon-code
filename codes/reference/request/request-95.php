<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function uploadAction()
    {
        // Проверяем что файл загрузился
        if ($this->request->hasFiles() == true) {
            // Выводим имя и размер файла
            foreach ($this->request->getUploadedFiles() as $file) {

                // Выводим детали
                echo $file->getName(), " ", $file->getSize(), "\n";


                // Перемещаем в приложение
                $file->moveTo('files/');
            }
        }
    }

}

