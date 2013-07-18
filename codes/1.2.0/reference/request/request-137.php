<?php

// get the Http-X-Requested-With header
$requestedWith = $response->getHeader("X_REQUESTED_WITH");
if ( $requestedWith == "XMLHttpRequest" ) {
    echo "The request was made with Ajax";
}

// Same as above
if ( $request->isAjax() ) {
    echo "The request was made with Ajax";
}

// Check the request layer
if ( $request->isSecureRequest() == true ) {
    echo "The request was made using a secure layer";
}

// Get the servers's ip address. ie. 192.168.0.100
$ipAddress = $request->getServerAddress();

// Get the client's ip address ie. 201.245.53.51
$ipAddress = $request->getClientAddress();

// Get the User Agent (HTTP_USER_AGENT)
$userAgent = $request->getUserAgent();

// Get the best acceptable content by the browser. ie text/xml
$contentType = $request->getAcceptableContent();

// Get the best charset accepted by the browser. ie. utf-8
$charset = $request->getBestCharset();

// Get the best language accepted configured in the browser. ie. en-us
$language = $request->getBestLanguage();


