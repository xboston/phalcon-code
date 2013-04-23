
    <?php

    use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

    class Robots extends Phalcon\Mvc\Model
    {
        public static function findByCreateInterval()
        {
            // Выражение на чистом SQL
            $sql = "SELECT * FROM robots WHERE id > 0";

            // Модель
            $robot = new Robots();

            // Выполнение запроса
            return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
        }
    }

