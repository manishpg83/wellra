<?php
require 'vendor/autoload.php';
require 'config.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

$email = trim($_POST['email'] ?? '');

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.html?error=email');
    exit;
}

addToKlaviyo($email);

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

function addToKlaviyo($email) {
    $url  = 'https://a.klaviyo.com/api/profiles/';
    $data = [
        'data' => [
            'type' => 'profile',
            'attributes' => [
                'email' => $email,
            ],
        ],
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Klaviyo-API-Key ' . KLAVIYO_PRIVATE_KEY,
        'Content-Type: application/json',
        'revision:'.date('Y-m-d'),
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // 201 = created, 409 = already exists (both are fine for us)
    if (curl_errno($ch)) {
        error_log('Klaviyo curl error: ' . curl_error($ch));
    } elseif ($status !== 201 && $status !== 409) {
        error_log('Klaviyo API error (' . $status . '): ' . $response);
    }

    curl_close($ch);
}