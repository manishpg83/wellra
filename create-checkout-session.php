<?php
require 'config.php';
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

addToKlaviyo($email);

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
                    'https://briskbraintech.com/projects/wellra/images/stripe-product.png'
                ],
            ],
            'unit_amount' => 2999,
        
      'unit_amount' => 500,
    ],
    'quantity' => 1,
  ]],
  'customer_email' => $email,
  'success_url' => 'https://briskbraintech.com/projects/wellra/thankyou.php',
  'cancel_url'  => 'https://briskbraintech.com/projects/wellra/index.php',
]);

header('Location: ' . $session->url);
exit;

function addToKlaviyo($email) {
   /*  $url  = 'https://a.klaviyo.com/api/profiles/';
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
        'revision: 2024-10-15'
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE); */

    $listId = 'WceviV';

    $url = "https://a.klaviyo.com/api/profile-subscription-bulk-create-jobs/";

    $data = [
        "data" => [
            "type" => "profile-subscription-bulk-create-job",
            "attributes" => [
                "profiles" => [
                    "data" => [
                        [
                            "type" => "profile",
                            "attributes" => [
                               'email' => $email
                            ]
                        ]
                    ]
                ]
            ],
            "relationships" => [
                "list" => [
                    "data" => [
                        "type" => "list",
                        "id" => $listId
                    ]
                ]
            ]
        ]
    ];

    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Authorization: Klaviyo-API-Key ' . KLAVIYO_PRIVATE_KEY,
            'Content-Type: application/json',
            'revision: 2024-10-15'
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    // 201 = created, 409 = already exists (both are fine for us)
    if (curl_errno($ch)) {
        error_log('Klaviyo curl error: ' . curl_error($ch));
    } elseif ($status !== 201 && $status !== 409) {
        error_log('Klaviyo API error (' . $status . '): ' . $response);
    }

    curl_close($ch);
}