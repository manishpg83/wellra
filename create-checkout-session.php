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
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'Wellra PureSqueeze — Launch Reservation',
      ],


            'currency' => 'usd',
            'product_data' => [
                'name' => 'VIP reservation',
                'description' => 'Reserve your Wellra Kickstarter VIP discount with a $5 deposit. You’ll receive exclusive launch pricing and a private Kickstarter link via email on launch day. Your $5 VIP reservation will be credited toward your purchase. Questions? Contact joshuakim@mywellra.com',
                'images' => [
                    BASE_URL.'/images/stripe-product.png'
                ],
            ],
            'unit_amount' => 2999,
        
      'unit_amount' => 500,
    ],
    'quantity' => 1,
  ]],
  'customer_email' => $email,
  'success_url' => BASE_URL.'/success.php?session_id={CHECKOUT_SESSION_ID}',
  'cancel_url'  => BASE_URL.'/index.php',
]);
header('Location: ' . $session->url);
exit;