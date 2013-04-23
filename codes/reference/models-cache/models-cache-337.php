<?php

//Get some invoice
$invoice = Invoices::findFirst();

//Get the customer related to the invoice
$customer = $invoice->customer;

//Print his/her name
echo $customer->name, "\n";

