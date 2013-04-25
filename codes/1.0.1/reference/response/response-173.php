<?php

// Не кэшировать
$response->setHeader('Cache-Control', 'private, max-age=0, must-revalidate');

