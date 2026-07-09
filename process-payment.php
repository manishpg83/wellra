<?php

header('Content-Type: application/json');

require 'config.php';
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

try {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['payment_method_id']) || !isset($data['email'])) {
        throw new Exception('Missing payment data');
    }

    $intent = \Stripe\PaymentIntent::create([
        'amount' => 500,
        'currency' => 'usd',
        'payment_method' => $data['payment_method_id'],
        'confirm' => true,
        'automatic_payment_methods' => [
            'enabled' => true,
            'allow_redirects' => 'never'
        ],
        'receipt_email' => $data['email']
    ]);

    if ($intent->status === 'succeeded') {
        echo json_encode([
            'success' => true,
            'message' => 'Payment successful'
        ]);
    } else {
        throw new Exception('Payment failed');
    }

} catch (Exception $e) {
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}