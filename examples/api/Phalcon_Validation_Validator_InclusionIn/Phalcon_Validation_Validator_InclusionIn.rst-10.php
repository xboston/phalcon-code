
    <?php

    use Phalcon\Validation\Validator\InclusionIn;
    
    $validator->add('status', new InclusionIn(array(
       'message' => 'The status must be A or B'
       'domain' => array('A', 'B')
    )));



