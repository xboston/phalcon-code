
    <?php

    use \Phalcon\Mvc\Model\Message;
    use \Phalcon\Mvc\Model\Validator\InclusionIn;
    use \Phalcon\Mvc\Model\Validator\Uniqueness;

    class Robots extends \Phalcon\Mvc\Model
    {

        public function validation()
        {
            // Тип робота должен быть: droid, mechanical или virtual
            $this->validate(new InclusionIn(
                array(
                    "field"  => "type",
                    "domain" => array("droid", "mechanical", "virtual")
                )
            ));

            // Имя робота должно быть уникально
            $this->validate(new Uniqueness(
                array(
                    "field"   => "name",
                    "message" => "The robot name must be unique"
                )
            ));

            // Год не может быть меньше нулевого
            if ($this->year < 0) {
                $this->appendMessage(new Message("The year cannot be less than zero"));
            }

            // Проверяет, были ли получены какие-либо сообщения при валидации
            if ($this->validationHasFailed() == true) {
                return false;
            }
        }

    }

