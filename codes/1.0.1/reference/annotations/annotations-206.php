<?php

/**
 * Включение кэша для представления, если 
 * последнее запущенное действие имело аннотацию @Cache
 */
class CacheEnablerPlugin extends \Phalcon\Mvc\User\Plugin
{

    /**
     * Это событие запускается перед запуском каждого маршрута в диспетчере
     *
     */
    public function beforeExecuteRoute($event, $dispatcher)
    {

        //Разбор аннотаций в текущем запущенном методе
        $annotations = $this->annotations->getMethod(
            $dispatcher->getActiveController(),
            $dispatcher->getActiveMethod()
        );

        //Проверить, имеет ли метод аннотацию 'Cache'
        if ($annotations->has('Cache')) {

            //Метод имеет аннотацию 'Cache'
            $annotation = $annotations->get('Cache');

            //Получить время жизни кэша
            $lifetime = $annotation->getNamedParameter('lifetime');

            $options = array('lifetime' => $lifetime);

            //Проверить, есть ли определенный пользователем ключ кэша
            if ($annotation->hasNamedParameter('key')) {
                $options['key'] = $annotation->getNamedParameter('key');
            }

            //Включить кэш для текущего метода
            $this->view->cache($options);
        }

    }

}

