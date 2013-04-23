
    <?php

    use Phalcon\Validation\Validator\Email as EmailValidator;
    
    $validator->add('email', new EmailValidator(array(
       'message' => 'The e-mail is not valid'
    )));



