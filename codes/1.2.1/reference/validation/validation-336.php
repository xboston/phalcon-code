<?php

use Phalcon\Validation\Validator,
    Phalcon\Validation\ValidatorInterface,
    Phalcon\Validation\Message;

class MyValidator extends Validator implements ValidatorInterface
{

    /**
     * Executes the validation
     *
     * @param Phalcon\Validation $validator
     * @param string $attribute
     * @return boolean
     */
    public function validate($validator, $attribute)
    {
        // If the attribute is name we must stop the chain
        if ($attribute == 'name') {
            $validator->setOption('cancelOnFail', true);
        }

        //...
    }

}
