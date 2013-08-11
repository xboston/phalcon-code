<?php

class mainTask extends \Phalcon\CLI\Task
{

    public function mainAction() {
         echo "\nThis is the default task and the default action \n";
    }
    
    /**
    * @param array $params
    */
   public function testAction(array $params) {
       echo sprintf('hello %s', $params[0]) . PHP_EOL;
       echo sprintf('best regards, %s', $params[1]) . PHP_EOL;
   }
}

