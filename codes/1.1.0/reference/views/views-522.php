<?php

class DownloadController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

        // Проверяет, кэш с ключом "downloads" на существование или истёкший срок
        if ($this->view->getCache()->exists('downloads')) {

            // Запрос последних загрузок
            $latest = Downloads::find(array(
                'order' => 'created_at DESC'
            ));

            $this->view->setVar('latest', $latest);
        }

        // Включает кэширование с ключом "downloads"
        $this->view->cache(array(
            'key' => 'downloads'
        ));
    }

}

