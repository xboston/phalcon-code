<?php

class Robots extends \Phalcon\Mvc\Collection
{

    public function notSave()
    {
        // Obtain the flash service from the DI container
        $flash = $this->getDI()->getShared('flash');

        // Show validation messages
        foreach ( $this->getMesages() as $message ) {
            $flash->error((string) $message);
        }
    }

}

