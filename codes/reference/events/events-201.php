
    <?php

    class SomeListener
    {

        public function beforeSomeTask($event, $myComponent)
        {
            echo "Выполняется beforeSomeTask\n";
        }

        public function afterSomeTask($event, $myComponent)
        {
            echo "Выполняется afterSomeTask\n";
        }

    }

