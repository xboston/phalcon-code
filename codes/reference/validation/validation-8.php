    <?php

use Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email;

$validation = new Phalcon\Validation();

$validation->add('name', new PresenceOf(
    'message' => 'The name is required'
));

$validation->add('email', new PresenceOf(
    'message' => 'The e-mail is required'
));

$validation->add('email', new Email(
    'message' => 'The e-mail is not valid'
));

$messages = $validation->validate($_POST);
if (count($messages)) {
    foreach ($messages as $message) {
        echo $message, '<br>';
    }
}


