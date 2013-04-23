    <?php

use Phalcon\Validation\Validator,
    Phalcon\Validation\ValidatorInterface,
    Phalcon\Validation\Message;

class IpValidator extends Validator implements ValidatorInterface
{

    /**
     * Выполненение валидации
     *
     * @param Phalcon\Validation $validator
     * @param string $attribute
     * @return boolean
     */
    public function validate($validator, $attribute)
    {
        $value = $validator->getValue($attribute);

        if (filter_var($value, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED))) {

            $message = $this->getOption('message');
            if (!$message) {
                $message = 'IP адресс не правилен';
            }

            $validator->appendMessage(new Message($message, $attribute, 'Ip'));

            return false;
        }

        return true;
    }

}

