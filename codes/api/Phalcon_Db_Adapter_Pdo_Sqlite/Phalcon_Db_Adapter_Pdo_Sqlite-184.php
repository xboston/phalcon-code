
    <?php

     print_r($connection->convertBoundParams('SELECT * FROM robots WHERE name = :name:', array('Bender')));




