
    <?php

    $expireDate = new DateTime();
    $expireDate->modify('-10 minutes');

    $response->setExpires($expireDate);

