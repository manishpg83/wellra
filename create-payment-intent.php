<?php

header('Content-Type: application/json');

require 'config.php';
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

try {
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => 500, // $5.00
        'currency' => 'usd',
        'automatic_payment_methods' => [
            'enabled' => true,
        ],
    ]);

    echo json_encode([
        'clientSecret' => $paymentIntent->client_secret
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'error' => $e->getMessage()
    ]);
}