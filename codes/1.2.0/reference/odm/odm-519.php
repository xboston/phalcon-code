<?php

class UrlValidator extends \Phalcon\Mvc\Collection\Validator
{

    public function validate($model)
    {
        $field = $this->getOption('field');

        $value    = $model->$field;
        $filtered = filter_var($value , FILTER_VALIDATE_URL);
        if ( !$filtered ) {
            $this->appendMessage("The URL is invalid" , $field , "UrlValidator");

            return false;
        }

        return true;
    }

}

