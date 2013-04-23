
    <?php

     //Traverse annotations
     foreach ($classAnnotations as $annotation) {
         echo 'Name=', $annotation->getName(), PHP_EOL;
     }
    
     //Check if the annotations has an specific
     var_dump($classAnnotations->has('Cacheable'));
    
     //Get an specific annotation in the collection
     $annotation = $classAnnotations->get('Cacheable');



