
    <?php

    use Phalcon\Validation\Validator\PresenceOf;
    
    $validator->add('name', new PresenceOf(array(
       'message' => 'The name is required'
    )));



