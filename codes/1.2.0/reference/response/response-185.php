<?php

//Calculate the E-Tag based on the modification time of the latest news
$recentDate = News::maximum(array( 'column' => 'created_at' ));
$eTag       = md5($recentDate);

//Send an E-Tag header
$response->setHeader('E-Tag' , $eTag);

