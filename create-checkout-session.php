<?php
require 'include/config.php';
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$email = trim($_POST['email'] ?? '');

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=email');
    exit;
}
$listId = 'WceviV';
addToKlaviyo($email, $listId);

$session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'line_items' => [[
        'price' => STRIPE_VIP_PRICE_ID,
        'quantity' => 1,
    ]],
    'customer_email' => $email,
    'success_url' => BASE_URL . '/success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => BASE_URL . '/index.php',
]);
header('Location: ' . $session->url);
exit;