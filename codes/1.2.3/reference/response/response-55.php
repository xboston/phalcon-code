<?php

//Setting it by its name
$response->setHeader("Content-Type", "application/pdf");
$response->setHeader("Content-Disposition", 'attachment; filename="downloaded.pdf"');

//Setting a raw header
$response->setRawHeader("HTTP/1.1 200 OK");

