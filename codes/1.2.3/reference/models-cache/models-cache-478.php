<?php

//Get some invoice
$invoice = Invoices::findFirst();

//Get the customer related to the invoice
$customer = $invoice->customer; // Invoices::findFirst('...');

//Same as above
$customer = $invoice->getCustomer(); // Invoices::findFirst('...');

