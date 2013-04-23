
    <?php

    class SomeComponent
    {

        protected $_di;

        public function __construct($di)
        {
            $this->_di = $di;
        }

        public function someDbTask()
        {

            // Get the connection service
            // Always returns a new connection
            $connection = $this->_di->get('db');

        }

        public function someOtherDbTask()
        {

            // Get a shared connection service,
            // this will return the same connection everytime
            $connection = $this->_di->getShared('db');

            //This method also requires an input filtering service
            $filter = $this->_db->get('filter');

        }

    }

    $di = new Phalcon\DI();

    //Register a "db" service in the container
    $di->set('db', function() {
        return new Connection(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "invo"
        ));
    });

    //Register a "filter" service in the container
    $di->set('filter', function() {
        return new Filter();
    });

    //Register a "session" service in the container
    $di->set('session', function() {
        return new Session();
    });

    //Pass the service container as unique parameter
    $some = new SomeComponent($di);

    $some->someTask();

