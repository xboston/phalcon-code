<?php

class MyComponent implements \Phalcon\Events\EventsAwareInterface
{

    protected $_eventsManager;

    public function setEventsManager($eventsManager)
    {
        $this->_eventsManager = $eventsManager;
    }

    public function getEventsManager()
    {
        return $this->_eventsManager
    }

    public function someTask()
    {
        $this->_eventsManager->fire("my-component:beforeSomeTask", $this);

        // тут выпполнение каких-либо действий

        $this->_eventsManager->fire("my-component:afterSomeTask", $this);
    }

}

