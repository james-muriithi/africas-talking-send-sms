<?php

$username = 'jam_es'; // use 'sandbox' for development in the test environment
$apiKey   = '6c1a5e29521563f1426c9a1d768357016f66c5a0adf7a7b48fdf1d0dea0e823c'; // use your sandbox app API key for development in the test environment
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