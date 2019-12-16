<?php

$username = ''; // use 'sandbox' for development in the test environment
$apiKey   = ''; // use your sandbox app API key for development in the test environment
$AT       = new AfricasTalking($username, $apiKey);
$to = '+254746792699';
$message = 'Hello there James.';

// Get one of the services
$sms      = $AT->sms();

// Use the service
$result   = $sms->send([
    'to'      => $to,
    'message' => $message
]);

print_r($result);