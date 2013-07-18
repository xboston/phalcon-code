<?php

$locale = Locale::acceptFromHttp($_SERVER["HTTP_ACCEPT_LANGUAGE"]);

// Locale could be something like "en_GB" or "en"
echo $locale;

