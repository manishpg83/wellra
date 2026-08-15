<?php
require 'include/config.php';
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

$session = \Stripe\Checkout\Session::retrieve(
    $_GET['session_id']
);

if(isset($session->payment_status) && $session->payment_status === 'paid') {

    
    if(isset($session->customer_email)) {
        $email = $session->customer_email;
        $listId = 'S8GmyS'; // Replace with your Klaviyo list ID
        addToKlaviyo($email, $listId); 
    }     
    header('Location: ' . BASE_URL . '/thankyou.php');
    exit;  
}