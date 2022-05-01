<?php

// Inicializa a biblioteca stripe
require_once('payment/stripe/init.php');
header('Content-Type: application/json');
// se existir o post data
var_dump($_POST);
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $id = "World Bros Server";
    
    // This is your test secret API key.
    \Stripe\Stripe::setApiKey('sk_test_51Kufx5I4YwwPzrij4QLa0KX6eHA72iY850ga3SYftYXDBGWxTIwN3lSj1t5meQZOLJskRt0LA7w96jiFvuIfzIFg00sm4LCL5e');


$YOUR_DOMAIN = 'http://localhost/simple_page_donation_for_server';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1KugLmI4YwwPzrijrbbkFG0p',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
}