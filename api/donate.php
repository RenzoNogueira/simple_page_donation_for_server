<?php

// Inicializa a biblioteca stripe
session_start();
header('Content-Type: application/json');
require_once('payment/stripe/init.php');

$valuesKeys = [
  12 => "price_1Kuy80I4YwwPzrij87eeqbTX",
  22 => "price_1Kuy8GI4YwwPzrijj5TN4UZM",
  40 => "price_1KugLnI4YwwPzrijbzCjArMe",
  60 => "price_1KugLnI4YwwPzrijZqD7BM1o",
];
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];
  $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : null;
  $message = isset($_POST['message']) ? $_POST['message'] : null;
  $id = "World Bros Server";

  // Busca o o preço e pega a chave no array $valuesKeys
  $price = $valuesKeys[$amount];
  $user = [
    'name' => $name,
    'email' => $email,
    'nickname' => $nickname,
    'message' => $message,
    'amount' => $amount,
    'id' => $id,
  ];
  $_SESSION['user'] = base64_encode(json_encode($user));

  // This is your test secret API key.
  \Stripe\Stripe::setApiKey('sk_test_51Kufx5I4YwwPzrij4QLa0KX6eHA72iY850ga3SYftYXDBGWxTIwN3lSj1t5meQZOLJskRt0LA7w96jiFvuIfzIFg00sm4LCL5e');


  $YOUR_DOMAIN = 'http://localhost/simple_page_donation_for_server';

  $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
      'price' => $price,
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/api/success.php',
    'cancel_url' => $YOUR_DOMAIN . '/index.html',
  ]);

  header("HTTP/1.1 303 See Other");
  header("Location: " . $checkout_session->url);
}
