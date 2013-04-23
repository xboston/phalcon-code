
    <?php

    $robots = Robots::findByRawSql('id > ?', array(10));

