
    <?php

    class Robots extends \Phalcon\Mvc\Collection
    {

        public function beforeValidationOnCreate()
        {
            echo "This is executed before creating a Robot!";
        }

    }

