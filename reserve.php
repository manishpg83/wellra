<?php
header('Content-Type: application/json');

require 'config.php';
require 'vendor/autoload.php';

function respond($success, $message = '', $extra = []) {
    echo json_encode(array_merge([
        'success' => $success,
        'message' => $message
    ], $extra));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

$payload = json_decode(file_get_contents('php://input'), true);

if (!is_array($payload)) {
    $payload = $_POST;
}

$email = trim($payload['email'] ?? '');
$phone = trim($payload['phone'] ?? '');
$phoneDigits = preg_replace('/\D/', '', $phone);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    respond(false, 'Enter a valid email address.');
}

if (strlen($phoneDigits) < 7 || strlen($phoneDigits) > 15) {
    http_response_code(422);
    respond(false, 'Enter a valid phone number.');
}

try {
    \Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => 500,
        'currency' => 'usd',
        'receipt_email' => $email,
        'metadata' => [
            'email' => $email,
            'phone' => $phone
        ],
        'payment_method_types' => ['card']
    ]);

    respond(true, 'Payment started.', [
        'clientSecret' => $paymentIntent->client_secret
    ]);
} catch (Exception $e) {
    http_response_code(500);
    respond(false, 'Payment could not be started. Please try again.');
}
