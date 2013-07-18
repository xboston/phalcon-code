<?php

//Get a set of invoices
// SELECT * FROM invoices
foreach ( Invoices::find() as $invoice ) {

    //Get the customer related to the invoice
    // SELECT * FROM customers WHERE id = ?
    $customer = $invoice->customer;

    //Print his/her name
    echo $customer->name , "\n";
}

