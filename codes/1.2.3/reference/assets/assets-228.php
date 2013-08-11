<?php

// This a remote resource that does not need filtering
$js->join(true);

//The name of the final file path
$js->setTargetPath('public/production/final.js');

//The script html tag is generated with this URI
$js->setTargetUri('production/final.js');

