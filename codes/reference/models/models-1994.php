
    <?php

    class Profiles extends \Phalcon\Mvc\Model
    {

        public function initialize()
        {
            $this->addBehavior(new Blamable());
        }

    }

