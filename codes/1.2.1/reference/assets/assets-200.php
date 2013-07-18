<?php

// This a remote resource that does not need filtering
$js->addJs('code.jquery.com/jquery-1.10.0.min.js', true, false);

// These are local resources that must be filtered
$js->addJs('common-functions.js');
$js->addJs('page-functions.js');

