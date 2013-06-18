<?php

class MyTemplateAdapter extends \Phalcon\Mvc\View\Engine
{

    /**
     * Adapter constructor
     *
     * @param \Phalcon\Mvc\View $view
     * @param \Phalcon\DI $di
     */
    public function __construct($view, $di)
    {
        //Initiliaze here the adapter
        parent::__construct($view, $di);
    }

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param array $params
     */
    public function render($path, $params)
    {

        // Access view
        $view = $this->_view;

        // Access options
        $options = $this->_options;

        //Render the view
        //...
    }

}

