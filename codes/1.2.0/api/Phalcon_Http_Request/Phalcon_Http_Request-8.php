<?php

$request = new Phalcon\Http\Request();
if ( $request->isPost() == true ) {
    if ( $request->isAjax() == true ) {
        echo 'Request was made using POST and AJAX';
    }
}



