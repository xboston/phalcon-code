<?php

use Phalcon\Mvc\Model\Validator,
    Phalcon\Mvc\Model\ValidatorInterface;

class MaxMinValidator extends Validator implements ValidatorInterface
{

    public function validate($model)
    {
        $field = $this->getOption('field');

        $min = $this->getOption('min');
        $max = $this->getOption('max');

        $value = $model->$field;

        if ($min <= $value && $value <= $max) {
            $this->appendMessage(
                "The field doesn't have the right range of values",
                $field,
                "MaxMinValidator"
            );
            return false;
        }
        return true;
    }

}

