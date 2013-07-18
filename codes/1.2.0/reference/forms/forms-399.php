<?php

<
form method = "post" >
    <?php
        //Traverse the form
        foreach ( $form as $element ) {

            //Get any generated messages for the current element
            $messages = $form->getMessagesFor($element->getName());

            if ( count($messages) ) {
                //Print each element
                echo '<div class="messages">';
                foreach ( $messages as $message ) {
                    echo $message;
                }
                echo '</div>';
            }

            echo '<p>';
            echo '<label for="' , $element->getName() , '">' , $element->getLabel() , '</label>';
            echo $element;
            echo '</p>';

        }
    ?>
<input type="submit" value="Send"/>
</form>

