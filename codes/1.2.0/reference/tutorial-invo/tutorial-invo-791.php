<?php

$paginator = new Phalcon\Paginator\Adapter\Model(array(
                                                      "data"  => $products , //Data to paginate
                                                      "limit" => 5 , //Rows per page
                                                      "page"  => $numberPage //Active page
                                                 ));

//Get active page in the paginator
$page = $paginator->getPaginate();

