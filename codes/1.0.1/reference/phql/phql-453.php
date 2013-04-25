<?php

$phql   = "INSERT INTO Cars VALUES (NULL, 'Nissan Versa', 7, 9999.00, 2012, 'Sedan')";
$result = $manager->executeQuery($phql);
if ($result->success() == false)
{
    foreach ($result->getMessages() as $message)
    {
        echo $message->getMessage();
    }
}

