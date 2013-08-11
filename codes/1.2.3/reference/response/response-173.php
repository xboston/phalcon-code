<?php

//Never cache the served page
$response->setHeader('Cache-Control', 'private, max-age=0, must-revalidate');

