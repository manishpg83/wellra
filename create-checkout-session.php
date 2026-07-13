<?php
require 'vendor/autoload.php';
require 'config.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

$email = $_POST['email'] ?? null;

$session = \Stripe\Checkout\Session::create([
  'mode' => 'payment',
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'Wellra PureSqueeze — Launch Reservation',
      ],
      'unit_amount' => 500,
    ],
    'quantity' => 1,
  ]],
  'customer_email' => $email,
  'success_url' => 'https://briskbraintech.com/projects/wellra/thankyou.html',
  'cancel_url'  => 'https://briskbraintech.com/projects/wellra/index.html',
]);

header('Location: ' . $session->url);
exit;