
    <?php

     //Parse the annotations in a class
     $reader = new \Phalcon\Annotations\Reader();
     $parsing = $reader->parse('MyComponent');
    
     //Create the reflection
     $reflection = new \Phalcon\Annotations\Reflection($parsing);
    
     //Get the annotations in the class docblock
     $classAnnotations = $reflection->getClassAnnotations();



