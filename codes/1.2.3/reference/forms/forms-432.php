<?php

class ContactForm extends Phalcon\Forms\Form
{
    public function initialize()
    {
        //...
    }

    public function renderDecorated($name)
    {
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());

        if (count($messages)) {
            //Print each element
            echo '<div class="messages">';
            foreach ($messages as $message) {
                echo $this->flash->error($message);
            }
            echo '</div>';
        }

        echo '<p>';
        echo '<label for="', $element->getName(), '">', $element->getLabel(), '</label>';
        echo $element;
        echo '</p>';
    }

}

