<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function showAction()
    {
        // Кэширование с помощью настроек по умолчанию
        $this->view->cache(true);
    }

    public function showArticleAction()
    {
        // Кэширование на один час
        $this->view->cache(array(
            "lifetime" => 3600
        ));
    }

    public function resumeAction()
    {
        // Кэширование представления этого действия на один день с ключем "resume-cache"
        $this->view->cache(
            array(
                "lifetime" => 86400,
                "key"      => "resume-cache",
            )
        );
    }

    public function downloadAction()
    {
        // Использование стороннего сервиса для кэширования
        $this->view->cache(
            array(
                "service"  => "myCache",
                "lifetime" => 86400,
                "key"      => "resume-cache",
            )
        );
    }

}

